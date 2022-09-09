<?php
use App\Http\Controllers\indicadorController;
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



Route::get('index', function () {

    $ultimaData = lancamento::select( lancamento::raw('max(dt_info) as ultimaData'))
    ->first()
   ;
    
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
        ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
        ->where('postos.cd_coop', '=', $usuario['cd_coop'])
        ->where('postos.cd_posto', '=', $usuario['cd_posto'])
        ->first();

    $rankingPodio = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "postos.cd_coop")
            ->on("gp.cd_posto", "=", "postos.cd_posto");
    })
        ->join("ranking_posto as rp", function ($join) {
            $join->on("rp.cd_coop", "=", "postos.cd_coop")
                ->on("rp.cd_posto", "=", "postos.cd_posto");
        })
        ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
        
        ->orderBy('posicao_ranking', 'ASC')
        ->get();

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
        ->where('postos.cd_posto', $usuario['cd_posto'])
        ->where('l.dt_info','=',$ultimaData['ultimaData'])
        ->get();
    
        // return $ultimaData['ultimaData'];
    return view('index', [
        'rankingPodio' => $rankingPodio,
        'usuario' => $usuario,
        'ranking' => $ranking,
        'dadosUsuario' => $dadosUsuario
    ]);
});

Route::get('comparador', function () {
    $usuario = usuario::where('cd_usuario', '=', auth::id())->first();
    return view('comparador');
});
Route::get('comparador2', function () {
    $usuario = usuario::where('cd_usuario', '=', auth::id())->first();
    $grupo = grupoPosto::where('cd_coop', '=', $usuario['cd_coop'])
        ->where('cd_posto', '=', $usuario['cd_posto'])->first();
    return view('comparador2', [

        'dadosUsuario' => lancamento::leftJoin("lancamento_extra as le", function ($join) {
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
            ->orderBy('i.cd_gr_similares', 'asc')
            ->get()
    ]);
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


    $rankingTop = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "postos.cd_coop")
            ->on("gp.cd_posto", "=", "postos.cd_posto");
    })
        ->join("ranking_posto as rp", function ($join) {
            $join->on("rp.cd_coop", "=", "postos.cd_coop")
                ->on("rp.cd_posto", "=", "postos.cd_posto");
        })
        ->orderby('gp.cd_grupo', 'asc')
        ->orderby('rp.posicao_ranking', 'asc')
        ->get();
    $ranking = posto::join("grupo_posto as gp", function ($join) {
        $join->on("gp.cd_coop", "=", "postos.cd_coop")
            ->on("gp.cd_posto", "=", "postos.cd_posto");
    })
        ->join("ranking_posto as rp", function ($join) {
            $join->on("rp.cd_coop", "=", "postos.cd_coop")
                ->on("rp.cd_posto", "=", "postos.cd_posto");
        })
        ->where('gp.cd_grupo', '=', $grupo['cd_grupo'])
        ->orderByDesc('pt_ranking')
        ->get();


    return view('ranking-geral', [
        'dadosRanking' => $ranking,
        'rankingTop' => $rankingTop

    ]);
});

//rotas indicadores e rotas default e 404
Route::get('/{indicador}', [indicadorController::class, 'show']);

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