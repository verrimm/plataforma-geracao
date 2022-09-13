<?php

namespace App\Http\Controllers;

use App\Models\grupo;
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

        //começo  da criação das  variaveis utilizadas na pagina, atraves de consultas sql
        $dadosUsuario = posto::join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "postos.cd_coop")
            ->on("gp.cd_posto", "=", "postos.cd_posto");
        })
            ->join("grupos as g", 'g.cd_grupo', "=", 'gp.cd_grupo')
            ->join("lancamento as l", function ($join) {
                $join->on("l.cd_coop", "=", "postos.cd_coop")
                ->on("l.cd_posto", "=", "postos.cd_posto");
            })
            ->join("indicadores as i", function ($join) {
                $join->on("i.cd_indicador", "=", "l.cd_indicador");
            })
            ->where('postos.cd_coop', $usuario['cd_coop'])
            ->where('l.dt_info', '=', $ultimaData['ultimaData'])
            ->where('postos.cd_posto', $usuario['cd_posto'])
            ->get();

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

        $listaGruposRanking = posto::join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "postos.cd_coop")
            ->on("gp.cd_posto", "=", "postos.cd_posto");
        })
            ->join("ranking_posto as rp", function ($join) {
                $join->on("rp.cd_coop", "=", "postos.cd_coop")
                ->on("rp.cd_posto", "=", "postos.cd_posto");
            })
            // ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
            ->orderBy('pt_ranking', 'desc')
            ->orderby('cd_grupo', 'asc')
            ->where('rp.dt_info', '=', $ultimaData['ultimaData'])
            // -where('cd_grupo' = '')
            ->get();

        $listaGrupos = grupo::join("superacao as s", "s.cd_superacao", "=", "g.cd_superacao")
        ->get();
    
        return view('ranking-geral', [
            'dadosUsuario' => $dadosUsuario,
            'infoGrupo' => $grupo,
            'dadosRanking' => $ranking,
            'rankingTop' => $rankingTop,
            'listaGrupos' => $listaGrupos,
            'listaGruposRanking' => $listaGruposRanking
        ]);


    }
}
