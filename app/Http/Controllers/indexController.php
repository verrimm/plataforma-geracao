<?php

namespace App\Http\Controllers;

use App\Models\grupo;
use App\Models\grupoPosto;
use App\Models\indicador;
use App\Models\lancamento;
use App\Models\posto;
use App\Models\rankingPosto;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function show(){

    $ultimaData = lancamento::select( lancamento::raw('max(dt_info) as ultimaData'))
    ->first();
    
    $raw = DB::statement("SET lc_time_names = 'pt_BR'");

    $mesesDisponiveis = rankingPosto::select(rankingPosto::raw('monthname(dt_info) as mes'))
    ->groupBy('ranking_posto.dt_info')
    ->get()
    ;

    $participantesPorGrupo  = grupo::select('g.nm_grupo','p.nm_posto','gp.cd_grupo')
    ->join("grupo_posto as gp",'gp.cd_grupo','=','g.cd_grupo')
    ->join("postos  as p", function ($join) {
        $join->on("gp.cd_coop", "=", "p.cd_coop")
            ->on("gp.cd_posto", "=", "p.cd_posto");
    
    })
    ->orderBy('gp.cd_grupo')    
    ->get();

    $usuario = usuario::where('cd_usuario', '=', Auth::id())->first();
    $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
        ->where('cd_posto', '=', $usuario['cd_posto'])->first();
    $ranking = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "p.cd_coop")
            ->on("gp.cd_posto", "=", "p.cd_posto");
    })
        ->join("ranking_posto as rp", function ($join) {
            $join->on("rp.cd_coop", "=", "p.cd_coop")
                ->on("rp.cd_posto", "=", "p.cd_posto");
        })
        ->where('rp.dt_info', '=', $ultimaData['ultimaData'])
        ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
        ->where('p.cd_coop', '=', $usuario['cd_coop'])
        ->where('p.cd_posto', '=', $usuario['cd_posto'])
        ->first();

    $rankingPodio = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "p.cd_coop")
            ->on("gp.cd_posto", "=", "p.cd_posto");
    })
        ->join("ranking_posto as rp", function ($join) {
            $join->on("rp.cd_coop", "=", "p.cd_coop")
                ->on("rp.cd_posto", "=", "p.cd_posto");
        })

        ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
        ->where('rp.dt_info','=',$ultimaData['ultimaData'])
        ->orderBy('posicao_ranking', 'asc')
        ->get();

        $rankingCarousel = posto::join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "p.cd_coop")
            ->on("gp.cd_posto", "=", "p.cd_posto");
        })
            ->join("ranking_posto as rp", function ($join) {
                $join->on("rp.cd_coop", "=", "p.cd_coop")
                ->on("rp.cd_posto", "=", "p.cd_posto");
            })
            ->where('posicao_ranking', '<', '4')
            ->orderby('cd_grupo', 'asc')
            ->orderBy('posicao_ranking', 'asc')
           
            ->get();

    $dadosUsuario = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "p.cd_coop")
            ->on("gp.cd_posto", "=", "p.cd_posto");
    })
        ->join("grupos as g", 'g.cd_grupo', "=", 'gp.cd_grupo')
        ->join("lancamento as l", function ($join) {
            $join->on("l.cd_coop", "=", "p.cd_coop")
                ->on("l.cd_posto", "=", "p.cd_posto");
        })
        ->join("indicadores as i", function ($join) {
            $join->on("i.cd_indicador", "=", "l.cd_indicador");
        })

        ->join("indicadores_similares_grupo as isg", "i.cd_gr_similares", "=", "isg.cd_gr_similares")
        ->leftJoin("lancamento_extra as le", function ($join) {
            $join->on("l.cd_superacao", "=", "le.cd_superacao")
            ->on("l.cd_indicador", "=", "le.cd_indicador")
            ->on("l.cd_coop", "=", "le.cd_coop")
            ->on("l.cd_posto", "=", "le.cd_posto")
            ->on("l.dt_info", "=", "le.dt_info");
        })
        ->where('p.cd_coop', $usuario['cd_coop'])
        ->where('p.cd_posto', $usuario['cd_posto'])

        ->where('l.dt_info','=',$ultimaData['ultimaData'])
        ->get();


    // return $ultimaData['ultimaData'];
    return view('index', [
        'mesesDisponiveis' =>  $mesesDisponiveis,
        'participantesPorGrupo' =>$participantesPorGrupo,
        'rankingPodio' => $rankingPodio,
        'usuario' => $usuario,
        'ranking' => $ranking,
        'dadosUsuario' => $dadosUsuario,
        'rankingCarousel'=> $rankingCarousel
    ]);


    }
}
