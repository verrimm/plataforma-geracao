<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\lancamento;
use App\Models\indicador;
use App\Models\usuario;
use App\Models\grupoPosto;
use App\Models\posto;
use Illuminate\Http\Request;

class indicadorController extends Controller
{
    //


    public function show($indicador)
    {

        
        if (Auth::check()) {
          
       


        //variaveis necessarias para consulta dependendo do usuario 
        $usuario = usuario::where('cd_usuario', '=', auth::id())->first();
        $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
            ->where('cd_posto', '=', $usuario['cd_posto'])
            ->join('grupos as g', 'g.cd_grupo', '=', 'gp.cd_grupo')
            ->first();
        //fim variaveis necessarias para consulta dependendo do usuario 
  
       
        

        
        $varTemp = 'z';
        $listaIndicadores = indicador::all();

        foreach ($listaIndicadores as $item) {
            if ($indicador == $item['url']) {

                $varTemp = $indicador;
            }
        }

        if ($varTemp != 'z') {
        
            $cd_indicador = indicador::where('url', '=', $varTemp)->first();
            //data mais "atual" da tabela lancamentos
            $ultimaData = lancamento::select(lancamento::raw('max(dt_info) as ultimaData'))
            ->first();
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
                ->where('l.dt_info', '=', $ultimaData['ultimaData'])
                ->where('p.cd_posto', $usuario['cd_posto'])
                ->get();

           
            

            $pontuacaoTotal =  posto::join("grupo_posto as gp", function ($join) {
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
                ->where('l.dt_info', '=', $ultimaData['ultimaData'])
                ->get();
            

             $pontuacaoIndicador = posto::join("grupo_posto as gp", function ($join) {
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
                ->where('l.cd_indicador', "=", $cd_indicador['cd_indicador'])
                ->where('l.dt_info', '=', $ultimaData['ultimaData'])
                ->first();


           


            //fim  da criação das  variaveis utilizadas na pagina, atraves de consultas sql   
            return view('indicador', [
                'infoUsuario' => $usuario,
                'dadosUsuario' => $dadosUsuario,
                'infoGrupo' => $grupo,
                'indicador' => indicador::where('url', '=', $varTemp)->first(),
                'pontuacaoIndicador' => $pontuacaoIndicador,
                'pontuacaoTotal' => $pontuacaoTotal 
            ]);
        } else {
            if (view()->exists($indicador)) {
                return view($indicador);
            } else {
                return view('pages-404');
            }
        }
    }

    }

}
