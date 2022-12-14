@extends('layouts.master')

@section('title')
    Superação
@endsection

@section('content')
    <div class="loader" id="fadeOut"
        style="position: fixed; z-index: 999999; top: 0; left: 0; width: 100%; height: 100%; background: #222736; display: block; justify-content: center; align-items: center;">
        <img style="left: 50%;top: 50%;position: absolute;" src="{{ URL::asset('assets/images/preloader.gif') }}" />
    </div>
    @component('components.breadcrumb')
        @slot('li_1')
            Superação
        @endslot
        @slot('title')
            Bem-Vindo {{ $usuario['nm_usuario'] }}
        @endslot
    @endcomponent

@section('css')

<style>
    .page-title-right {
        display: none;
    }

    .select2-container{
        width: 100%!important;
    }
</style>

    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/jbox/jbox.min.css') }}">
@endsection

<div class="row" id="conteudoIndex">
    <div class="col-xl-12 d-flex flex-column">
        <div class="row" style="justify-content: center;">
            <div class="col-md-9">
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="badge bg-primary" style="font-size: 100%; margin-bottom: 8px !important;">
                                    <span class="bx bx-map-pin"></span>
                                    {{ $dadosUsuario[0]['nm_grupo'] }}
                                </p>
                                <button type="button" class="btn btn-outline-light tooltipIndicador" draggable="true"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Grupo da sua agência no Superação 2022"><i
                                        class="far fa-question-circle"></i></button>
                                <h5 class="mb-0">
                                    {{ $dadosUsuario[0]['nm_posto'] }}
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <p class="badge bg-primary" style="font-size: 100%; margin-bottom: 8px !important;">
                                    <span class="bx bx-trophy"></span>
                                    Pontuação Total
                                </p>
                                <button type="button" class="btn btn-outline-light tooltipIndicador" draggable="true"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Número de pontos conquistados até agora no Superação 2022"><i
                                        class="far fa-question-circle"></i></button>
                                <h5 class="mb-0">
                                    {{ $dadosUsuario->sum('pontuacao') }}
                                </h5>
                            </div>
                            <div class="flex-grow-1">
                                <p class="badge bg-primary" style="font-size: 100%; margin-bottom: 8px !important;">
                                    <span class="bx bx-calendar"></span> Referência</p>
                                <button type="button" class="btn btn-outline-light tooltipIndicador" draggable="true"
                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Data das informações listadas"><i
                                        class="far fa-question-circle"></i></button>
                                <h5 class="mb-0">Julho/22</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer progressBarBG">
                        <div class="d-flex titleProgressBar">
                            <h5 id="textPontuacao">Faltam <strong
                                    class="success pontosInicio">{{ $rankingPodio[0]['pt_ranking'] - $dadosUsuario->sum('pontuacao') + 1 }}
                                    pontos</strong> para a <p class="badge bg-success" style="font-size: 100%;">1º</p>
                                colocação</h5>
                            <h5 id="textPontuacaoPrimeiro" style="display: none">🏆 Parabéns! Você atualmente é o <p
                                    class="badge bg-success" style="font-size: 100%;">1º</p> colocado do seu grupo</h5>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="avatar-xs progress-icon-start" style="position: relative; top: -14px;">
                                <span
                                    class="avatar-title start border iconePosicaoRanking metaRanking">{{ $ranking['posicao_ranking'] }}º</span>
                            </div>
                            <div class="custom-progess mt-3 mb-4 d-flex flex-colunm w-100">
                                <div class="progress animated-progess progress-lg w-100">
                                    <div class="progress-bar-striped js-completed-bar progress-bar bg-success rounded-bar"
                                        role="progressbar"
                                        data-complete="{{ ($dadosUsuario->sum('pontuacao') * 100) / $rankingPodio[0]['pt_ranking'] }}">
                                    </div>
                                    <svg class="fogueteBar bx-spin"
                                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                                        xmlns:svg="http://www.w3.org/2000/svg" id="svg2385"
                                        style="enable-background:new" viewBox="0 0 450.17 478.26" version="1.0">
                                        <defs id="defs2387">
                                            <radialGradient id="radialGradient3172" gradientUnits="userSpaceOnUse"
                                                cy="470.03" cx="253.14"
                                                gradientTransform="matrix(1 0 0 .19711 0 377.38)" r="114.36">
                                                <stop id="stop3102" stop-color="#333" offset="0" />
                                                <stop id="stop3104" stop-color="#333" stop-opacity="0"
                                                    offset="1" />
                                            </radialGradient>
                                            <linearGradient id="linearGradient3239" y2="1026.6"
                                                gradientUnits="userSpaceOnUse" x2="125.48"
                                                gradientTransform="matrix(.97480 0 0 .97480 173.34 -492.31)"
                                                y1="1070.5" x1="237.35">
                                                <stop id="stop3530" offset="0" />
                                                <stop id="stop3532" stop-opacity="0" offset="1" />
                                            </linearGradient>
                                            <linearGradient id="linearGradient3242" y2="1143.9"
                                                gradientUnits="userSpaceOnUse" x2="468.48"
                                                gradientTransform="matrix(.97410 0 0 .97410 179.47 -490.16)"
                                                y1="1122" x1="350.87">
                                                <stop id="stop3522" offset="0" />
                                                <stop id="stop3524" stop-opacity="0" offset="1" />
                                            </linearGradient>
                                            <radialGradient id="radialGradient3245" gradientUnits="userSpaceOnUse"
                                                cy="1062.9" cx="311.43"
                                                gradientTransform="matrix(1 0 0 1.0001 167.18 -512.7)" r="225.06">
                                                <stop id="stop3415" stop-color="#fff" offset="0" />
                                                <stop id="stop3512" stop-color="#fff" offset=".4702" />
                                                <stop id="stop3417" stop-color="#d6d6d6" offset="1" />
                                            </radialGradient>
                                            <radialGradient id="radialGradient3248" gradientUnits="userSpaceOnUse"
                                                cy="207.49" cx="317.61"
                                                gradientTransform="matrix(.83833 0 0 .83833 211.22 370.35)"
                                                r="245.83">
                                                <stop id="stop3425" stop-color="#6a6a6a" offset="0" />
                                                <stop id="stop3427" offset="1" />
                                            </radialGradient>
                                            <linearGradient id="linearGradient3250" y2="882.13"
                                                gradientUnits="userSpaceOnUse" x2="320.48"
                                                gradientTransform="matrix(.87835 0 0 .87835 218.72 -432.34)"
                                                y1="952.46" x1="299.17">
                                                <stop id="stop3538" stop-color="#333" offset="0" />
                                                <stop id="stop3540" stop-opacity="0" offset="1" />
                                            </linearGradient>
                                        </defs>
                                        <g id="layer1" transform="translate(-236.97 -366.48)">
                                            <path id="path3382"
                                                d="m687.14 591.56c0 124.25-100.84 225.09-225.08 225.09-124.25 0-225.09-100.84-225.09-225.09 0-124.24 100.84-225.08 225.09-225.08 124.24 0 225.08 100.84 225.08 225.08z"
                                                style="enable-background:accumulate" fill="url(#radialGradient3248)"
                                                fill-rule="evenodd" />
                                            <path id="path3400"
                                                d="m462.05 366.48c-49.13 0-94.58 15.79-131.6 42.53-16.11 19.49-27.4 39-27.4 39l-20.56 7.88c-28.56 37.73-45.5 84.75-45.5 135.69 0 4.75 0.14 9.47 0.43 14.15 5.12 9.14 8.94 14.97 8.94 14.97l-2.62 25.69c14.7 58.68 52.45 108.24 103.06 138.5 3.61 2.34 6.63 3.75 9.95 5.63-1.76-1.66-2.3-2.11-3.45-3.16-13.25-13.71-24.41-29.72-24.41-29.72l32.03-29.47s20.6 15.56 43.72 23.62c23.13 8.06 48.78 8.63 48.78 8.63l15.88 40.75s-14.03 7.19-33.94 10.72c-3.56 0.63-7.33 1.14-11.09 1.56 12.29 2.08 24.9 3.19 37.78 3.19 52.04 0 99.99-17.69 138.12-47.38 11.93-15.98 19.75-29.72 19.75-29.72l17.38-6.81c30.83-38.22 49.43-86.72 49.81-139.53-6.12-18.16-12.81-28.81-12.81-28.81s1.71-16.58-0.69-34.85c-0.38-2.87 1.55-1.85 3.87-3.4-0.69-2.6-3.19-10.31-4.45-13.99-4.96-14.5-9.84-21.41-13.04-27.82 6.24 3.48-0.03-0.02-0.04-0.04-38.13-70.16-112.48-117.81-197.9-117.81zm27.22 8.56c18.7 0.26 38.22 6.32 38.22 6.32s22.17 8.52 38 20.56c15.82 12.04 25.31 27.59 25.31 27.59l-40.25 27.82s-21.67-14.85-44.31-22.85c-22.65-8-46.29-9.15-46.29-9.15l-11.4-41.54s17.26-8.11 37-8.71c1.23-0.04 2.47-0.05 3.72-0.04zm-131.53 111.19c13.82 0.07 25.31 1.72 25.31 1.72l20.81 88.44-66.81 63.62s-20.86-13.23-35.91-26.18c-15.04-12.96-24.28-25.63-24.28-25.63s2.72-25.65 8.84-47.72c6.13-22.06 15.69-40.53 15.69-40.53s16.52-9.51 36.94-12.5c6.38-0.94 13.12-1.25 19.41-1.22zm216.53 63.16s18.83 8.25 34.03 20.4c15.19 12.16 26.75 28.22 26.75 28.22s-1.08 22-8.35 44.88c-7.26 22.87-20.71 46.62-20.71 46.62s-18.78 6.89-38.6 8.75c-19.81 1.86-40.69-1.31-40.69-1.31l-10.34-43.28-10.66-44.5s14.15-17.05 31.29-32 37.28-27.78 37.28-27.78z"
                                                style="enable-background:accumulate" fill="url(#radialGradient3245)"
                                                fill-rule="evenodd" />
                                            <path id="path3514" stroke-linejoin="round"
                                                style="enable-background:accumulate"
                                                d="m633.37 598.68s-1.05 21.44-8.13 43.72-20.18 45.4-20.18 45.4-18.29 6.73-37.6 8.54c-19.3 1.81-39.61-1.29-39.61-1.29l-10.09-42.15-10.37-43.33s13.77-16.64 30.47-31.2c16.69-14.56 36.31-27.05 36.31-27.05s18.35 8.06 33.15 19.89c14.8 11.84 26.05 27.47 26.05 27.47z"
                                                stroke="url(#linearGradient3242)" stroke-width="4.8705"
                                                fill="none" />
                                            <path id="path3516" stroke-linejoin="round"
                                                style="enable-background:accumulate"
                                                d="m337.13 638.06s-20.33-12.9-35-25.53c-14.66-12.62-23.65-24.97-23.65-24.97s2.63-24.99 8.61-46.5c5.97-21.51 15.28-39.53 15.28-39.53s16.1-9.26 36-12.17c19.91-2.92 43.62 0.5 43.62 0.5l20.28 86.21-65.14 61.99z"
                                                stroke="url(#linearGradient3239)" stroke-width="4.874"
                                                fill="none" />
                                            <path id="path3518" style="enable-background:accumulate"
                                                d="m526.54 385.59s19.47 7.5 33.37 18.08c13.9 10.57 22.24 24.23 22.24 24.23l-35.36 24.43s-19.03-13.05-38.92-20.08-47.71-9.8-47.71-9.8l-9.32-36.84s19.39-6.77 36.73-7.3c17.33-0.54 38.97 7.28 38.97 7.28z"
                                                stroke="url(#linearGradient3250)" stroke-width="5.0158"
                                                fill="none" />
                                            <path id="path3479" d="m382.01 489.15s36.18-48.08 78.43-64.33"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3506" d="m552.78 456.1s26.98 42.93 23.48 91.93"
                                                stroke="#ececec" stroke-width="3" fill="none" />
                                            <path id="path3481" d="m550.37 456.61s27.58 44.38 24.08 93.38"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3483" d="m587.8 429.25s59.78 23.6 86.03 98.35"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3485" d="m635.42 597.89s21.04-1.64 39.43-32.75"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3487" d="m620.39 739.32s2.92-18.13-14.52-50.95"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3489" d="m453.67 760.93s32.35-8.57 73.36-65.14"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3491" d="m336.82 639.22s-1.95 50.38 23.16 89.98"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3493" d="m328.88 757.9s-7.43 0.1-35.55-16.85"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3495" d="m277.33 588.13s-20.15 8.47-31 31.92"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3497" d="m302.7 448.25s-7.23 27.91-0.95 51.36"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3499" d="m326.92 412.6s60.05-50.9 121.22-28.27"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3501" d="m469.15 801.22s52.39 13.45 133.19-34.24"
                                                stroke="#666" stroke-width="1px" fill="none" />
                                            <path id="path3504" d="m382.2 485.55s30.09-41.45 74.34-61.32"
                                                stroke="#f2f2f2" stroke-linecap="square" stroke-width="3"
                                                fill="none" />
                                            <path id="path3508" d="m454.49 762.67s30.82-5.95 71.83-62.52"
                                                stroke="#fff" stroke-width="3" fill="none" />
                                            <path id="path3510" d="m334.79 640.34s-1.94 50.4 23.16 90"
                                                stroke="#fff" stroke-width="3" fill="none" />
                                            <path id="path2453" style="enable-background:accumulate"
                                                d="m404.35 576.56s26.34 6.18 101.29 32.7" stroke="#999"
                                                stroke-width="1px" fill="none" />
                                            <path id="path3260" style="enable-background:accumulate"
                                                d="m404.35 575.28s26.34 6.19 101.29 32.7" stroke="#ececec"
                                                stroke-width="1px" fill="none" />
                                        </g>
                                    </svg>
                                    {{-- MARCOS Segundo e Terceiro Lugar --}}
                                    <div class="marcos" style="position: absolute; width: 100%;left:0;">
                                        <div class="marcosMetaTerceiro" style="z-index: 100; position:absolute"
                                            data-complete-meta="{{ ($rankingPodio[2]['pt_ranking'] * 100) / $rankingPodio[0]['pt_ranking'] }}">
                                            <a href="./ranking-geral" target="_blank" class="third">|<i
                                                    class="bx bxs-trophy third tooltipMarcoTerceiro bx-tada"></i></a>
                                        </div>
                                        <div class="marcosMetaSegundo" style="z-index: 100"
                                            data-complete-meta="{{ ($rankingPodio[1]['pt_ranking'] * 100) / $rankingPodio[0]['pt_ranking'] }}">
                                            <a href="./ranking-geral" target="_blank" class="second">|<i
                                                    class="bx bxs-trophy second tooltipMarcoSegundo bx-tada"></i></a>
                                        </div>
                                    </div>
                                    {{-- END MARCOS --}}
                                </div>

                                {{-- TOOLTIPS CONTENT --}}
                                <div style="display: none" id="conteudoMarcoSegundo">
                                    <div class="d-flex" style="margin-top: 10px">
                                        <i class="fas fa-trophy second fa-3x iconMarco" style="margin-right: 10px"
                                            data-colocacao="{{ $rankingPodio[1]['posicao_ranking'] }}"></i>
                                        <h5>Faltam
                                            <strong>{{ $rankingPodio[1]['pt_ranking'] - $dadosUsuario->sum('pontuacao') + 1 }}</strong>
                                            pontos para a colocação
                                        </h5>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <h6 id="footerMarcoSegundo"><strong>{{ $rankingPodio[1]['nm_posto'] }} |
                                                Pontos:
                                                {{ $rankingPodio[1]['pt_ranking'] }}</strong></h6>
                                    </div>
                                </div>
                                <div style="display: none" id="conteudoMarcoTerceiro">
                                    <div class="d-flex" style="margin-top: 10px">
                                        <i class="fas fa-trophy third fa-3x iconMarco" style="margin-right: 10px"
                                            data-colocacao="{{ $rankingPodio[2]['posicao_ranking'] }}"></i>
                                        <h5>Faltam <strong>{{ $rankingPodio[2]['pt_ranking'] - $dadosUsuario->sum('pontuacao') + 1 }}</strong>
                                            pontos para a colocação
                                        </h5>
                                    </div>
                                    <h6 id="footerMarcoTerceiro"><strong>{{ $rankingPodio[2]['nm_posto'] }} | Pontos:
                                            {{ $rankingPodio[2]['pt_ranking'] }}</strong></h6>
                                </div>
                                <div style="display: none" id="conteudoMarcoPrimeiro">
                                    <div class="d-flex" style="margin-top: 10px">
                                        <i class="fas fa-trophy first fa-3x iconMarco bx-tada" style="margin-right: 10px"
                                            data-colocacao="{{ $rankingPodio[0]['posicao_ranking'] }}"></i>
                                        <h5>{{ $rankingPodio[0]['nm_posto'] }} | Pontos: {{ $rankingPodio[0]['pt_ranking'] }}</h5>
                                    </div>
                                </div>                                
                                {{-- END TOOLTIPS --}}

                                <div class="avatar-xs progress-icon-end" style="position: relative">
                                    <span id="iconPontuacao" class="avatar-title-card border iconePosicaoRanking tooltipMarcoPrimeiro">{{ $rankingPodio[0]['posicao_ranking'] }}º</span>
                                    <span id="iconPontuacaoPrimeiro" style="display: none; position: absolute; bottom: 10px;">🥅</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column">
                <button onclick="hideShow()" type="button"
                    class="shrinkFiltro btn border-primary btn-sm waves-effect waves-light px-2" id="botaoFiltro"><i
                        class="fas fa-filter" id="iconFiltro"></i> <span class="text-white"
                        id="textoFiltro">Filtros</span></button>
                <div class="card border border-primary mini-stats-wid" id="cardFiltro" style="display: none;">
                    <div class="card-body" style="margin-top: 5%">
                        <form action="" id="formIndex" class="d-flex flex-column">
                            @csrf
                            <div class="mb-2">
                                @php
                                    $grupo = $participantesPorGrupo[0]['nm_grupo'];
                                    $contadorGrupo = 0;
                                    $contadorInicial = 0;
                                @endphp
                           
                                    <input class="d-none" type="text" id="grupoSelecionado" name="grupoSelecionado" >
                                    <input class="d-none" id="postoSelecionado" type="text" name="postoSelecionado">
                                    <input class="d-none" id="mesSelecionado"  type="text" name="mesSelecionado">
                                    <span>Unidade</span>
                                <div class="input-group">     
                                <select  required id="selectIndexUnidades" class="form-control select2 selectFiltros">
                                    @foreach ($participantesPorGrupo as $item)
                                        @if ($contadorInicial == 0)
                                            <option value="">Selecione</option>
                                            <optgroup label=" Grupo: {{ $item['nm_grupo'] }} ">
                                                @php
                                                    $contadorInicial++;
                                                @endphp
                                        @endif
        
                                        @if ($item['nm_grupo'] == $grupo)
                                            <option value="" data-qualGrupo="{{$item['cd_grupo']}}">{{ $item['nm_posto'] }}</option>
                                        @else
                                            </optgroup> {{-- aqui acontece a magica, sempre que muda de grupo fecha o optgroup --}}
                                            @php
                                                
                                                $grupo = $item['nm_grupo'];
                                                
                                            @endphp
        
                                            <optgroup label=" Grupo: {{ $item['nm_grupo'] }} ">
        
                                                <option value=""> {{ $item['nm_posto'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <span>Periodo</span>
                            <div class="input-group">
                                <select required id="selectIndexPeriodo" class="form-control select2 selectFiltros">
                                    <option value="">Selecione</option>
                                    @foreach ($mesesDisponiveis as $item)
                                        <option class="text-capitalize" value=""> {{ $item['mes'] }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group mt-3" style="justify-content: space-evenly; ">
                                <button type="submit" onclick="conteudoIndex()"  class="btn btn-primary w-md">Filtrar</button>

                            </div>
                        </form>
        
                    </div>
                </div>
                <div class="card mini-stats-wid bgIndicador my-2" id="posicaoCard">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h1 class="posicaoRanking"
                                    style="color: #fff; text-align: center; margin-bottom: 0px; font-size: 5.03125rem; margin-top: 22px; text-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                                    {{ $ranking['posicao_ranking'] }}º</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" id="footerRankingPosicao">
                        <h3
                            style="color: #fff; text-align: center; margin-bottom: 34px; text-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                            POSIÇÃO ATUAL</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- inicio linhas -->
    @foreach ($dadosUsuario as $item)
        <div class="col-md-3 indicadorCard">
            <a href="./{{ $item['url'] }}">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            {{-- CONTEÚDO DO CARD --}}
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-muted fw-medium">{{ $item['nm_indicador'] }}</p>
                                            <h5 class="mb-0">
                                                @if ($item['sufixo'] != null)
                                                    {{-- caso tenha sufixo (porcentagem) --}}
                                                    {{ $item['vl_lcto'] * 100 }}
                                                    {{ $item['sufixo'] }}
                                                @else
                                                    {{-- caso nao tenha sufixo (cifrao) --}}
                                                    {{ $item['prefixo'] }}
                                                    {{ number_format($item['vl_lcto'], 0, ',', '.') }}
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="flex-shrink-0 align-self-center">
                                            <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                <span
                                                    class="avatar-title rounded-circle avatarRanking iconePosicaoRanking">{{ $item['ordem'] }}º</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="carousel-align">
                                        <h6>{{ number_format(($item['pontuacao'] * 100) / $dadosUsuario->sum('pontuacao')) }}%
                                            <span class="separador primary"></span> {{ $item['pontuacao'] }}/{{$item["pontuacao_base"]*$item["total_participantes"]}}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            {{-- END CONTEUDO --}}
                        </div>
                        <div class="flip-card-back">
                            <div class="card-title">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="titleCard"><small><strong>RESUMO</strong></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex" style="justify-content: space-evenly; ">
                                    <div class="flex-grow-1">
                                        @unless($item['label_vl_extra_1'] == null)
                                            <h6 class="lead"><small><i class="bx bx-wallet"></i> <strong
                                                        style="font-weight: 500;">{{ $item['label_vl_extra_1'] }}:</strong>
                                                    <span
                                                        style="font-weight: 300;">{{ $item['prefixo_1'] }}{{ number_format($item['vl_extra_1'], 0, ',', '.') }}{{ $item['sufixo_1'] }}</span></small>
                                            </h6>
                                        @endunless
                                        <h6 class="lead"><small><i class="bx bx-food-menu"></i> <strong
                                                    style="font-weight: 500;">{{ $item['label_vl_extra_2'] }}:</strong>
                                                <span style="font-weight: 300;">{{ $item['prefixo_2'] }}{{ number_format($item['vl_extra_2'], 0, ',', '.') }}{{ $item['sufixo_2'] }}</span></small>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="position: absolute; width: 100%; left: 0px; bottom: 0px">
                                <div class="d-flex" style="justify-content: space-evenly;">
                                    <h6 style="padding-top: 10px"><small>CLIQUE E SAIBA MAIS <i
                                                class="fas fa-plus-circle primary"></i></small></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

</div>



@endsection
@section('script')

<!-- barra de progresso -->

<script>

    document.getElementById("formIndex").addEventListener("click", function(event){
    event.preventDefault()
    });
   



    $(document).ready(function(){

        iniciar()




    });



    
  function conteudoIndex(){

        var formulario = document.getElementById('formIndex')  
        var formData = new FormData(formulario)
        var link = "resumo"

        $.ajax({
            type: 'POST',
            url: link,
            data: formData,
            processData: false,
            contentType: false,
            success: function(resposta){
            teste = resposta
            var formulario = document.getElementById('conteudoIndex')
            formulario.innerHTML=resposta
            console.log("sucesso")
            iniciar()
            },
            error: function(resposta){
            console.log("erro")
        }
    })
}







</script>




<script>
    // Carrega Loader por 1seg na troca de modo noturno
    $('.loader').show();
    setTimeout(function() {
        $('.loader').hide();
    }, 1000);
    // ================================================//

    
    function iniciar(){
            //VALIDA META DEPEDENDO DA COLOCAÇÃO
        var posicao = document.querySelector(".metaRanking");

        var marcosMetaTerceiro = document.querySelector(".marcosMetaTerceiro");
        var marcosMetaSegundo = document.querySelector(".marcosMetaSegundo");

        var textPontuacao = document.getElementById("textPontuacao");
        var textPontuacaoPrimeiro = document.getElementById("textPontuacaoPrimeiro");

        var iconPontuacao = document.getElementById("iconPontuacao");
        var iconPontuacaoPrimeiro = document.getElementById("iconPontuacaoPrimeiro");

        switch (posicao.innerText) {
            case "3º":
                marcosMetaTerceiro.style.display = "none";
                break;

            case "2º":
                marcosMetaSegundo.style.display = "none";
                marcosMetaTerceiro.style.display = "none";
                break;

            case "1º":
                marcosMetaSegundo.style.display = "none";
                marcosMetaTerceiro.style.display = "none";

                textPontuacao.style.display = "none";
                textPontuacaoPrimeiro.style.display = "block";

                iconPontuacaoPrimeiro.style.display = "flex";
                iconPontuacaoPrimeiro.style.fontSize = "2rem";
                iconPontuacaoPrimeiro.style.marginBottom = "2px";

                iconPontuacao.style.display = "none";
                break;

            default:
                console.log('default')
                break;
             }

             progressMeta()
             bgColocacao()
             iconColocacao()
             jboxInit()
             carregarSelect2()
             cancelarSubmitForm()


        }

    //Função para esconder card de regra na página do indicador
    function hideShow() {
            var botao = document.getElementById("botaoFiltro");
            var card = document.getElementById("cardFiltro");
            var texto = document.getElementById("textoFiltro");
            var icone = document.getElementById("iconFiltro");
            var posicao = document.getElementById("posicaoCard");


            if (card.style.display === "block") {
                posicao.style.display = "flex";
                card.style.display = "none";
                texto.innerHTML = "Filtros";
                icone.classList.replace("fa-angle-down", "fa-angle-right");
                botao.classList.replace("expandFiltro", "shrinkFiltro");

            } else {
                posicao.style.display = "none";
                card.style.display = "block";
                texto.innerHTML = "Esconder Filtros";
                icone.classList.replace("fa-angle-right", "fa-angle-down")
                botao.classList.replace("shrinkFiltro", "expandFiltro");
            }
    }
    
    function progressMeta(){
    
        const progress = document.querySelector(".js-completed-bar");
        if (progress) {
            progress.style.width = (progress.getAttribute("data-complete")-2) + "%";
            progress.style.opacity = 1;
        }

        const marcosMetaSegundo = document.querySelector(".marcosMetaSegundo");
        if (marcosMetaSegundo) {
            marcosMetaSegundo.style.paddingLeft = (marcosMetaSegundo.getAttribute("data-complete-meta")-2) + "%";
            marcosMetaSegundo.style.opacity = 1;
        }

        const marcosMetaTerceiro = document.querySelector(".marcosMetaTerceiro");
        if (marcosMetaTerceiro) {
            marcosMetaTerceiro.style.paddingLeft = (marcosMetaTerceiro.getAttribute("data-complete-meta")-4)+ "%";
            marcosMetaTerceiro.style.opacity = 1;
        }


}

    function bgColocacao(){

        // <!-- define cor da posição ranking  -->
        var posicao = document.querySelector(".posicaoRanking");
        var bgIndicador = document.querySelector(".bgIndicador");

            switch (posicao.innerText) {
                case "1º":
                    bgIndicador.classList.add("bg-ouro");
                    break;

                case "2º":
                    bgIndicador.classList.add("bg-prata");
                    break;

                case "3º":
                    bgIndicador.classList.add("bg-bronze");
                    break;

                default:
                    bgIndicador.classList.add("bg-ranking");
                    break;

            }
    }

    
    function iconColocacao(){
    // <!-- define cor da posição  -->
    var posicao = document.querySelectorAll(".iconePosicaoRanking");

    for (var i = 0; i < posicao.length; i++) {
        switch (posicao[i].innerText) {
            case "1º":
                posicao[i].classList.add("bg-success");
                break;

            case "2º":
                posicao[i].classList.add("bg-success");
                break;

            case "3º":
                posicao[i].classList.add("bg-success");
                break;

            case "4º":
                posicao[i].classList.add("bg-warning");
                break;

            case "5º":
                posicao[i].classList.add("bg-warning");
                break;

            case "6º":
                posicao[i].classList.add("bg-warning");
                break;

            default:
                posicao[i].classList.add("bg-danger");
                break;
        }
    }


    } 


    //<!-- define cor da posição ranking  -->
    function jboxInit(){
     
        new jBox('Tooltip', {
            attach: '.tooltipMarcoSegundo',
            animation: {
                open: 'pulse',
                close: 'pulse'
            },
            position: {
                y: 'bottom'
            },
            width: 300,
            content: $('#conteudoMarcoSegundo'),
            footer: $('#footerMarcoSegundo'),
            closeOnMouseleave: true
        });

        new jBox('Tooltip', {
            attach: '.tooltipMarcoTerceiro',
            animation: {
                open: 'pulse',
                close: 'pulse'
            },
            position: {
                y: 'bottom'
            },
            width: 300,
            content: $('#conteudoMarcoTerceiro'),
            footer: $('#footerMarcoTerceiro'),
            closeOnMouseleave: true
        });

        new jBox('Tooltip', {
            attach: '.tooltipMarcoPrimeiro',
            animation: {
                open: 'pulse',
                close: 'pulse'
            },
            position: {
                y: 'bottom'
            },
            width: 300,
            content: $('#conteudoMarcoPrimeiro'),
            footer: $('#footerMarcoPrimeiro'),
            closeOnMouseleave: true
        });
    }

    function carregarSelect2(){

        $('#selectIndexPeriodo').select2();
            $('#selectIndexPeriodo').on('select2:select', function (e) {
            var data = e.params.data;

            document.querySelector('#mesSelecionado').setAttribute('value',data.text)

            });


            $('#selectIndexUnidades').select2();
            $('#selectIndexUnidades').on('select2:select', function (e) {
            var data = e.params.data;
      
            document.querySelector('#postoSelecionado').setAttribute('value',data.text)
            document.querySelector('#grupoSelecionado').setAttribute('value',data.element.dataset.qualgrupo)

            });
    }


    function cancelarSubmitForm(){  
        document.getElementById("formIndex").addEventListener("click", function(event){
            event.preventDefault()
        });
    }

</script>




<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
{{-- select box filtro --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<!-- dashboard init -->

@endsection
