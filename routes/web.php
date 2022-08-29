<?php

use App\Models\grupo;
use App\Models\grupoPosto;
use App\Models\indicador;
use App\Models\posto;
use App\Models\User;
use App\Models\usuario;
use App\Models\rankingPosto;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');


//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);


Route::get('index', function () {

    $usuario = usuario::where('cd_usuario', '=', auth::id())->first();
    $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
    ->where('cd_posto', '=', $usuario['cd_posto'])->first();
    $ranking = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "postos.cd_coop")
            ->on("gp.cd_posto", "=", "postos.cd_posto");
        })
    ->join("ranking_posto as rp", function ($join) {
        $join->on("rp.cd_coop", "=", "postos.cd_coop")
            ->on("rp.cd_posto", "=", "postos.cd_posto");
    })
    ->where('gp.cd_grupo','=',$grupo['cd_grupo'])
    ->first()
    ;

    return view('index', [

        'ranking' => $ranking, 
        'dadosUsuario' => posto::join("grupo_posto as gp", function ($join) {
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
            ->where('postos.cd_posto', $usuario['cd_posto'])
            ->get()

    ]);
});

Route::get('comparador', function () {
    return view('comparador');
});
Route::get('simulador', function () {
    return view('simulador');
});
Route::get('regulamento', function () {
    return view('regulamento');
});
Route::get('ranking-geral', function () {
    $usuario = usuario::where('cd_usuario', '=', auth::id())->first();
    $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
        ->where('cd_posto', '=', $usuario['cd_posto'])->first();
    $ranking = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "postos.cd_coop")
            ->on("gp.cd_posto", "=", "postos.cd_posto");
        })
    ->join("ranking_posto as rp", function ($join) {
        $join->on("rp.cd_coop", "=", "postos.cd_coop")
            ->on("rp.cd_posto", "=", "postos.cd_posto");    
    })
    ->where('gp.cd_grupo','=',$grupo['cd_grupo'])
    ->orderByDesc('pt_ranking')
    ->get()
    ;


    return view('ranking-geral', [
        'dadosRanking' => $ranking

    ]);
});

//rotas indicadores
Route::get('/{indicador}', function ($indicador) {

    $varTemp = 0;
    $listaIndicadores = indicador::all();

    foreach ($listaIndicadores as $item) {
        if ($indicador == $item['url']) {

            $varTemp = $indicador;
        }
    }

    $usuario = usuario::where('cd_usuario', '=', auth::id())->first();
    $cd_indicador = indicador::where('url', '=', $varTemp)->first();

    return view('indicador', [

        'indicador' => indicador::where('url', '=', $varTemp)->first(),

        'pontuacaoIndicador' => posto::join("grupo_posto as gp", function ($join) {
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
            ->where('postos.cd_posto', $usuario['cd_posto'])
            ->where('l.cd_indicador', "=", $cd_indicador['cd_indicador'])
            ->first(),

        'pontuacaoTotal' => posto::join("grupo_posto as gp", function ($join) {
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
            ->where('postos.cd_posto', $usuario['cd_posto'])
            ->get()
    ]);
});




Route::get('/{hacks}', function ($hacks) {

    return view($hacks);
});
