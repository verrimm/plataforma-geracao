<?php

namespace App\Http\Controllers;

use App\Models\grupoPosto;
use App\Models\lancamento;
use App\Models\posto;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    public function show(){

        $ultimaData = lancamento::select( lancamento::raw('max(dt_info) as ultimaData'))
    ->first()
   ;
    
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
        
        ->orderBy('posicao_ranking', 'ASC')
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
        ->where('p.cd_coop', $usuario['cd_coop'])
        ->where('p.cd_posto', $usuario['cd_posto'])
        ->where('l.dt_info','=',$ultimaData['ultimaData'])
        ->get();
    
        // return $ultimaData['ultimaData'];
    return view('index', [
        'rankingPodio' => $rankingPodio,
        'usuario' => $usuario,
        'ranking' => $ranking,
        'dadosUsuario' => $dadosUsuario
    ]);


    }
}
