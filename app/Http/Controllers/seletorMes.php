<?php

namespace App\Http\Controllers;

use App\Models\grupo;
use App\Models\grupoPosto;
use App\Models\lancamento;
use App\Models\posto;
use App\Models\rankingPosto;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class seletorMes extends Controller
{
    //

    public function ranking(Request $request){
        $ultimaData = lancamento::select(lancamento::raw('max(dt_info) as ultimaData'))
        ->first();

    
        $mesRequest =  $request->input('mes');
       
         $raw = DB::statement("SET lc_time_names = 'pt_BR'");

         $ultimaDataTemp = lancamento::where(lancamento::raw('monthname(dt_info)'),'=',$mesRequest)
         ->first();
       
     

        $usuario = usuario::where('cd_usuario', '=', Auth::id())->first();
        $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
            ->where('cd_posto', '=', $usuario['cd_posto'])->first();

        //começo  da criação das  variaveis utilizadas na pagina, atraves de consultas sql
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
            ->where('l.dt_info', '=', $ultimaDataTemp['dt_info'])
            ->where('p.cd_posto', $usuario['cd_posto'])
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
        $ranking = posto::select("p.nm_posto",'rp.pt_ranking','rp.posicao_ranking',DB::raw("  CASE
        WHEN rp.posicao_ranking > rp2.posicao_ranking THEN 1
        WHEN rp.posicao_ranking < rp2.posicao_ranking THEN - 1
        ELSE 0    END AS 'evolucao'"))
        ->join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "p.cd_coop")
                ->on("gp.cd_posto", "=", "p.cd_posto");
        })
            ->join("ranking_posto as rp", function ($join) {
                $join->on("rp.cd_coop", "=", "p.cd_coop")
                    ->on("rp.cd_posto", "=", "p.cd_posto");
            })
            ->leftJoin("ranking_posto as rp2", function ($join) {
                $join->on("rp.cd_superacao", "=", "rp2.cd_superacao")
                ->on("rp.cd_coop", "=", "rp2.cd_coop")
                ->on("rp.cd_posto", "=", "rp2.cd_posto")
                ->on("rp2.dt_info","=",DB::raw('date_add(rp.dt_info, INTERVAL - 1 MONTH)'))
                ;
            })

            ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
            ->where('rp.dt_info', '=',  $ultimaDataTemp['dt_info'])
            ->orderByDesc('rp.pt_ranking')
           
            ->get();

        $listaGruposRanking = posto::join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "p.cd_coop")
            ->on("gp.cd_posto", "=", "p.cd_posto");
        })
            ->join("ranking_posto as rp", function ($join) {
                $join->on("rp.cd_coop", "=", "p.cd_coop")
                ->on("rp.cd_posto", "=", "p.cd_posto");
            })
            // ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
            ->orderBy('pt_ranking', 'desc')
            ->orderby('cd_grupo', 'asc')
            ->where('rp.dt_info', '=', $ultimaDataTemp['dt_info'])
            // -where('cd_grupo' = '')
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

        $listaGrupos = grupo::join("superacao as s", "s.cd_superacao", "=", "g.cd_superacao")
        ->get();



        return view('seletorMes.Ranking',[
            'ultimaData'=>$ultimaDataTemp['dt_info'],
            'ultimaData1'=>$ultimaData['ultimaData'],
            'dadosUsuario' => $dadosUsuario,
            'infoGrupo' => $grupo,
            'dadosRanking' => $ranking,
            'rankingTop' => $rankingTop,
            'listaGrupos' => $listaGrupos,
            'listaGruposRanking' => $listaGruposRanking,
            'rankingCarousel' => $rankingCarousel
        ]);


    }


    public function index(Request $request){

        $ultimaData = lancamento::select( lancamento::raw('max(dt_info) as ultimaData'))
        ->first();
        
        $raw = DB::statement("SET lc_time_names = 'pt_BR'");

        $mesRequest =  $request->input('mesSelecionado');
        $grupoRequest =  $request->input('grupoSelecionado');
        $postoRequest =  $request->input('postoSelecionado');

        $coopEunidadeSelecionado = grupoPosto::select('gp.cd_coop','gp.cd_posto')
        ->join("postos as p", function ($join) {
            $join->on("gp.cd_coop", "=", "p.cd_coop")
                ->on("gp.cd_posto", "=", "p.cd_posto");
        })
        ->where('gp.cd_grupo','=',$grupoRequest)
        ->where('p.nm_posto','=',$postoRequest)
        ->first()
        ;
;

        $ultimaDataTemp = lancamento::where(lancamento::raw('monthname(dt_info)'),'=',$mesRequest)
        ->first();




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

        // $usuario = usuario::where('cd_usuario', '=', Auth::id())->first();
        $usuario = $coopEunidadeSelecionado ;
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
            // ->where('rp.dt_info', '=', $ultimaData['ultimaData'])
            ->where('rp.dt_info', '=', $ultimaDataTemp['dt_info'])
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
            // ->where('rp.dt_info','=',$ultimaData['ultimaData'])
            ->where('rp.dt_info', '=', $ultimaDataTemp['dt_info'])
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

            // ->where('l.dt_info','=',$ultimaData['ultimaData'])
            ->where('l.dt_info', '=', $ultimaDataTemp['dt_info'])
            ->get();

            
 



        return view('seletorMes.index', [
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
