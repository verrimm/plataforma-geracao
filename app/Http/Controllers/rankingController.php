<?php

namespace App\Http\Controllers;

use App\Models\grupoPosto;
use App\Models\lancamento;
use App\Models\posto;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class rankingController extends Controller
{
    public function show(){

        $ultimaData = lancamento::select(lancamento::raw('max(dt_info) as ultimaData'))
        ->first();

        $usuario = usuario::where('cd_usuario', '=', Auth::id())->first();
        $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
            ->where('cd_posto', '=', $usuario['cd_posto'])->first();
    
    
        $rankingTop = posto::join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "p.cd_coop")
                ->on("gp.cd_posto", "=", "p.cd_posto");
        })
            ->join("ranking_posto as rp", function ($join) {
                $join->on("rp.cd_coop", "=", "p.cd_coop")
                    ->on("rp.cd_posto", "=", "p.cd_posto");
            })
            ->orderby('gp.cd_grupo', 'asc')
            ->orderby('rp.posicao_ranking', 'asc')
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
            ->orderByDesc('pt_ranking')
            ->where('rp.dt_info', '=', $ultimaData['ultimaData'])
            ->get();
    
    
        return view('ranking-geral', [
            'dadosRanking' => $ranking,
            'rankingTop' => $rankingTop
    
        ]);




    }
}
