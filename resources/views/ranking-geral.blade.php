@extends('layouts.master', ['rankingRapido' => 'teste'])

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
            <div class="row" style="justify-content: flex-start;">
                <div class="card border border-primary mini-stats-wid rankingCards" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                                class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves
                                            <span class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid rankingCards" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                                class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves
                                            <span class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid rankingCards" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                                class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves
                                            <span class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid rankingCards" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                                class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves
                                            <span class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid rankingCards" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                                class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves
                                            <span class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid rankingCards" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                                class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves
                                            <span class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid rankingCards" data-bs-toggle="modal"
                    data-bs-target=".bs-example-modal-lg">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <span class="img-fluid"><i class="bx bxs-trophy first"></i> Mãe de Deus <span
                                                class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy second"></i> Bento Gonçalves
                                            <span class="separador"></span></span>
                                        <span class="img-fluid"><i class="bx bxs-trophy third"></i> Fortaleza </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Large modal example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum.
                    Cras justo odio, dapibus ac facilisis in,
                    egestas eget quam. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Vivamus sagittis lacus vel
                    augue laoreet rutrum faucibus dolor auctor.</p>
                <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                    Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Donec sed odio dui. Donec
                    ullamcorper nulla non metus auctor
                    fringilla.</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
{{-- select box filtro --}}
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

@endsection