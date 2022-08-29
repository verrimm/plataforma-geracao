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
                                        {{-- <div class="complete"></div> --}}
                                        {{$itemRaking['pt_ranking']}}
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
                {{-- <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Filtros</p>
                            </div>
                        </div>
                        <form action="">
                            <div class="mb-2">
                                <select class="form-control select2 selectFiltros">
                                    <option>Selecione</option>
                                    <optgroup label="Grupo 0">
                                        <option value="AK">Agência 1</option>
                                        <option value="HI">Agência 2</option>
                                    </optgroup>
                                    <optgroup label="Grupo 1">
                                        <option value="CA">Agência 3</option>
                                        <option value="NV">Agência 4</option>
                                        <option value="OR">Agência 5</option>
                                        <option value="WA">Agência 6</option>
                                    </optgroup>
                                    <optgroup label="Grupo 2">
                                        <option value="AZ">Agência 7</option>
                                        <option value="CO">Agência 8</option>
                                        <option value="ID">Agência 9</option>
                                        <option value="MT">Agência 10</option>
                                        <option value="NE">Agência 11</option>
                                    </optgroup>
                                    <optgroup label="Grupo 3">
                                        <option value="AL">Agência 12</option>
                                        <option value="AR">Agência 13</option>
                                        <option value="IL">Agência 14</option>
                                        <option value="IA">Agência 15</option>
                                        <option value="KS">Agência 16</option>
                                    </optgroup>
                                    <optgroup label="Grupo 4">
                                        <option value="CT">Agência 17</option>
                                        <option value="DE">Agência 18</option>
                                        <option value="FL">Agência 19</option>
                                        <option value="GA">Agência 20</option>
                                        <option value="IN">Agência 21</option>
                                        <option value="ME">Agência 22</option>
                                        <option value="MD">Agência 23</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="input-group" id="datepicker4">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                <input type="text" class="form-control" data-date-container='#datepicker4'
                                    data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1"
                                    placeholder="Período">
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 4</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 6</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-primary mini-stats-wid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <p class="badge bg-primary" style="font-size: 100%;"><i class="bx bx-filter-alt"></i>
                                    Grupo 7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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