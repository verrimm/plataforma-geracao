@extends('layouts.master')

@section('title') Superação @endsection
@section('css')
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Superação @endslot
@slot('title') Ranking GRUPO {{$dadosRanking[0]['cd_grupo']}} @endslot
@endcomponent

<div class="col-xl-12">
    <div class="row" style="justify-content: flex-start;">
        <div class="col-md-8">
            <div class="card border border-primary page-leaderboard mb-3">
                <div id="contain-all" class=" slideout-panel">
                    <section class="ranking">
                        <div class="contain">
                            <div class="ranking-table">
                                <div class="ranking-table-header-row mb-2">
                                    <div class="ranking-table-header-data h6">Posição</div>
                                    <div class="ranking-table-header-data h6">Agência</div>
                                    <div class="ranking-table-header-data h6">Pontuação</div>
                                    <div class="ranking-table-header-data h6">Evolução</div>
                                </div>

                                @php
                                $contador = 0
                                @endphp
                                @foreach ($dadosRanking as $itemRaking)

                                @if ($contador==0)
                                <div class="ranking-table-row-leader-1">
                                    <div class="ranking-table-data-leader-1">
                                        <div class="medal-gold"></div>
                                    </div>
                                    <div class="ranking-table-data">
                                        {{$itemRaking['nm_posto']}}
                                    </div>
                                    <div class="ranking-table-data">
                                        {{$itemRaking['pt_ranking']}}
                                    </div>
                                    <div class="ranking-table-data" style="padding-right: 1.125rem">
                                        <i class="fas fa-angle-up fa-2x success"></i>
                                    </div>
                                </div>
                                @endif
                                @if ($contador==1)
                                <div class="ranking-table-row-leader-2">
                                    <div class="ranking-table-data-leader-2">
                                        <div class="medal-silver"></div>
                                    </div>
                                    <div class="ranking-table-data">
                                        {{$itemRaking['nm_posto']}}
                                    </div>
                                    <div class="ranking-table-data">
                                        {{$itemRaking['pt_ranking']}}
                                    </div>
                                    <div class="ranking-table-data" style="padding-right: 1.125rem">
                                        <i class="fas fa-angle-down fa-2x danger"></i>
                                    </div>
                                </div>
                                @endif
                                @if ($contador==2)
                                <div class="ranking-table-row-leader-3">
                                    <div class="ranking-table-data-leader-3">
                                        <div class="medal-bronze"></div>
                                    </div>
                                    <div class="ranking-table-data">
                                        {{$itemRaking['nm_posto']}}
                                    </div>
                                    <div class="ranking-table-data">
                                        {{$itemRaking['pt_ranking']}}
                                    </div>
                                    <div class="ranking-table-data" style="padding-right: 1.125rem">
                                        <i class="fas fa-angle-up fa-2x success"></i>
                                    </div>
                                </div>
                                @endif

                                @php
                                $contador++
                                @endphp
                                @endforeach

                                <div class="ranking-table-body mb-3">

                                    @php
                                    $contador = 0
                                    @endphp

                                    @foreach ($dadosRanking as $itemRanking)
                                    @if ($contador>2)

                                    <div class="ranking-table-row">
                                        <div class="ranking-table-data">
                                            {{$contador+1}}
                                        </div>
                                        <div class="ranking-table-data">
                                            {{$itemRanking['nm_posto']}}
                                        </div>
                                        <div class="ranking-table-data">
                                            {{-- <div class="complete"></div> --}}
                                            {{$itemRanking['pt_ranking']}}
                                        </div>
                                        <div class="ranking-table-data" style="padding-right: 1.125rem">
                                            <i class="fas fa-minus fa-1x"></i>
                                        </div>
                                    </div>

                                    @endif

                                    @php
                                    $contador++
                                    @endphp

                                    @endforeach

                                </div>
                            </div>
                            <!--Use Date Formatter-->
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="col-md-4">
           
                @foreach ($listaGrupos as $item)
                @unless ($dadosRanking[0]['cd_grupo'] == $item['cd_grupo'])

                <div class="card border border-primary mini-stats-wid rankingCards bg-ranking-grupos" data-bs-toggle="modal"
                    data-bs-target=".{{$item['nm_grupo']}}" style="align-items: center">
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h3>{{$item['nm_grupo']}}</h3>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>

               <!--  Large modal example -->
                <div class="modal fade {{$item['nm_grupo']}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Ranking - {{$item['nm_grupo']}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body"> 
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Posição</th>
                                    <th scope="col">Agência</th>
                                    <th scope="col">Pontuação</th>
                                    </tr>
                                </thead>
                                <tbody class="tableRanking">
                                    @foreach ($listaGruposRanking as $itemLista)
                                        @if ($itemLista['cd_grupo'] == $item['cd_grupo'])         
                                        <tr>
                                            <th scope="row">{{$itemLista['posicao_ranking']}}</th>
                                            <td>{{$itemLista['nm_posto']}}</td>
                                            <td>{{$itemLista['pt_ranking']}}</td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            

                @endunless
                @endforeach
            
        </div>
    </div>
</div>

@endsection

@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
{{-- select box filtro --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

@endsection