<?php

use App\Http\Controllers\comparadorAjaxController;
use App\Http\Controllers\comparadorController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\indicadorController;
use App\Http\Controllers\premiacaoController;
use App\Http\Controllers\rankingController;
use App\Http\Controllers\regulamentoController;
use App\Http\Controllers\seletorMes;
use App\Http\Controllers\simuladorController;
use App\Models\grupo;
use App\Models\grupoPosto;
use App\Models\indicador;
use App\Models\lancamento;
use App\Models\posto;
use App\Models\User;
use App\Models\usuario;
use App\Models\rankingPosto;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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


//para modificar as funcoes ctrl+click no controlador para ir para o arquivo 
Route::get('index', [indexController::class, 'show']);

Route::get('comparador', [comparadorController::class, 'show']);

Route::get('simulador', function () {
    return view('simulador');
});
Route::get('regulamento', function () {
    return view('regulamento');
});

Route::get('ranking-geral', [rankingController::class, 'show']);


Route::get('graficoIndicadores/{indicador}', function ($indicador) {

    $varTemp = 'z';
    $usuario = usuario::where('cd_usuario', '=', auth::id())->first();
    $listaIndicadores = indicador::all();

    foreach ($listaIndicadores as $item) {
        if ($indicador == $item['url']) {

            $varTemp = $indicador;
        }
    }

    if ($varTemp != 'z') {
    

    $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
    ->where('cd_posto', '=', $usuario['cd_posto'])
    ->join('grupos as g', 'g.cd_grupo', '=', 'gp.cd_grupo')
    ->first();
        

        // $rankingIndicador = lancamento::select( 'l.dt_info as x', 'l.ordem as y')
       
        $raw = DB::statement("SET lc_time_names = 'pt_BR'");
       
        $rankingIndicador = lancamento::select(lancamento::raw(' monthname(l.dt_info ) as x'), 'l.vl_lcto as y')
       
        ->join("indicadores as i", 'i.cd_indicador', "=", 'l.cd_indicador')
        ->join("grupo_posto as gp", function ($join) {
            $join->on("gp.cd_coop", "=", "l.cd_coop")
            ->on("gp.cd_posto", "=", "l.cd_posto");
        })
            ->where('url', '=', $varTemp)
            ->where('gp.cd_grupo', '=',$grupo['cd_grupo'])
            ->where('l.cd_coop','=',$usuario['cd_coop'])
            ->where('l.cd_posto', '=', $usuario['cd_posto'])
           
            ->get();

            


      
    return $rankingIndicador ->toJson();
   

    }

});

Route::post('seletorMesRanking',[seletorMes::class,'ranking'])->name('seletorMesRanking')->name('seletorMesRanking');
Route::post('resumo',[seletorMes::class,'index'])->name('resumoIndex')->name('resumoIndex');
Route::get('resumo',[seletorMes::class,'index'])->name('resumoIndex')->name('resumoIndex');



Route::post('comparadorAjax', [comparadorAjaxController::class, 'show'])->name('comparadorAjax');

//rotas regulamento
Route::get('premiacao', [premiacaoController::class, 'show']);

//rotas regulamento
Route::get('regulamento', [regulamentoController::class, 'show']);

//rotas regulamento
Route::get('simulador', [simuladorController::class, 'show']);

//rotas indicadores e rotas default e 404 || PRECISA SEMPRE FICAR POR ÚLTIMO NA LISTA 
Route::get('/{indicador}', [indicadorController::class, 'show']);


