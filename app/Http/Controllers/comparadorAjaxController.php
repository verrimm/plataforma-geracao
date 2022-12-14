<?php

namespace App\Http\Controllers;

use App\Models\grupoPosto;
use App\Models\lancamento;
use App\Models\posto;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class comparadorAjaxController extends Controller
{   
    public function show(Request $request){

        




        if (Auth::check()) {

            $ultimaData = lancamento::select(lancamento::raw('max(dt_info) as ultimaData'))
            ->first();
            $usuario = usuario::where('cd_usuario', '=', Auth::id())->first();
            $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
            ->where('cd_posto', '=', $usuario['cd_posto'])->first();


            $unidadeComparada = $request->input('unidade');


            $participantesGrupo = posto::join("grupo_posto as gp", function ($join) {
                $join->on("p.cd_coop", "=", "gp.cd_coop")
                    ->on("p.cd_posto", "=", "gp.cd_posto");
            })
            ->join('grupos as g','gp.cd_grupo','=','g.cd_grupo')
            ->where('gp.cd_grupo','=', $grupo['cd_grupo'])
            ->get();


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
                ->join("postos as p", function ($join) {
                    $join->on("l.cd_coop", "=", "p.cd_coop")
                        ->on("l.cd_posto", "=", "p.cd_posto");
                })
                ->where('p.nm_posto','=', $unidadeComparada)
                ->where('l.dt_info', '=', $ultimaData['ultimaData'])
                ->orderBy('i.cd_gr_similares', 'asc')
                ->get();


            return view('tabelaComparador',[

                    'dadosUsuario'=> $dadosUsuario,
                    'participantesGrupo'=>$participantesGrupo,
                    'ultimaData' => $ultimaData


            ]);


        }

        else{

            redirect('index');

        }

       

    }
}
