<?php

namespace App\Http\Controllers;

use App\Models\grupoPosto;
use App\Models\lancamento;
use App\Models\posto;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class comparadorController extends Controller
{
    public function show(){

        $ultimaData = lancamento::select(lancamento::raw('max(dt_info) as ultimaData'))
        ->first();


        $usuario = usuario::where('cd_usuario', '=', Auth::id())->first();
        $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
        ->where('cd_posto', '=', $usuario['cd_posto'])->first();
        $participantesGrupo = posto::join("grupo_posto as gp", function ($join) {
            $join->on("p.cd_coop", "=", "gp.cd_coop")
                ->on("p.cd_posto", "=", "gp.cd_posto");
        })
        ->join('grupos as g','gp.cd_grupo','=','g.cd_grupo')
        ->where('gp.cd_grupo','=', $grupo['cd_grupo'])
        ->get();

        $minhaUnidade = posto::where('cd_coop', '=', $usuario['cd_coop'])
        ->where('cd_posto', '=', $usuario['cd_posto'])->first();

        $dadosUsuario = lancamento::leftJoin("lancamento_extra as le", function ($join) {
            $join->on("l.cd_superacao", "=", "le.cd_superacao")
                ->on("l.cd_indicador", "=", "le.cd_indicador")
                ->on("l.cd_coop", "=", "le.cd_coop")
                ->on("l.cd_posto", "=", "le.cd_posto")
                ->on("l.dt_info", "=", "le.dt_info");
        })
            ->join('indicadores as i', 'i.cd_indicador', '=', 'l.cd_indicador')
            ->join("grupo_posto as gp", function ($join) {
                $join->on("l.cd_coop", "=", "gp.cd_coop")
                    ->on("l.cd_posto", "=", "gp.cd_posto");
            })
            ->join('indicadores_similares_grupo as is', 'is.cd_gr_similares', '=', 'i.cd_gr_similares')
            ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
            ->where('l.cd_coop', '=', $usuario['cd_coop'])
            ->where('l.cd_posto', '=', $usuario['cd_posto'])
            ->where('l.dt_info', '=', $ultimaData['ultimaData'])
            ->orderBy('i.cd_gr_similares', 'asc')
            ->get();

        $ranking = posto::join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "p.cd_coop")
                ->on("gp.cd_posto", "=", "p.cd_posto");
        })
        ->join("ranking_posto as rp", function ($join) {
            $join->on("rp.cd_coop", "=", "p.cd_coop")
                ->on("rp.cd_posto", "=", "p.cd_posto");
        })
            ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
            ->where('p.cd_coop', '=', $usuario['cd_coop'])
            ->where('p.cd_posto', '=', $usuario['cd_posto'])
            ->first();
            
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
            

        return view('comparador', [

        'participantesGrupo'=>$participantesGrupo,
        'minhaUnidade'=>$minhaUnidade,
        'dadosUsuario' => $dadosUsuario,
        'rankingCarousel' => $rankingCarousel,
        'ranking' =>  $ranking
    ]);


    }
}
