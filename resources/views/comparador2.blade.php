@extends('layouts.master')

@section('title') Superação @endsection

@section('css')
    <!-- Responsive Table css -->
    <link href="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
    .table-striped>tbody>tr:nth-of-type(odd)>* {
        --bs-table-accent-bg: #e5e5e5!important;
        
    }
    </style>


@endsection


@section('content')

@component('components.breadcrumb')
@slot('li_1') Superação @endslot
@slot('title') Comparador @endslot
@endcomponent




<div class="row">
  <div class="col-12">


    <!-- end page title -->

    <!-- start page content -->
    <div class="row">
      <p>
        Selecione uma unidade para compararar resultados.
      </p>
    </div>

    <div class="row">
      <div class="col-6 mb-3">
        <label class="col-md-2 col-form-label">Unidade:</label>
        <select class="form-select" disabled="">
          <option>Minha Unidade</option>
        </select>
      </div>

      <div class="col-6 mb-3">
        <label class="col-md-2 col-form-label">Unidade:</label>
        <select class="form-select">
          <option>Selecione</option>
          <option>27 - Un. Camaquã</option>
          <option>27 - Un. Guaíba</option>
          <option>60 - Un. Santa Vitória do Palmar</option>
          <option>60 - Un. Fortaleza</option>
          <option>94 - Un. Três Passos</option>
          <option>116 - Un. Soledade</option>
        </select>
      </div>
      <label class="col-md-6 col-form-label">Class. Geral: 2º</label>
    </div>

    <div class="row">
      <!-- COOPERATIVA DEFAULT -->


      <div class="col-lg-6">



        {{-- inicio primeiro foreach --}}
    
        <div class="row">
          <div class="table-rep-plugin">
            <div class="table-responsive table-bordered mb-0">
              <table id="1" class="table table-striped">
                {{-- <thead>
                  <tr>
                    <th>Indicadores</th>
                    <th data-priority="1">Class.</th>
                    <th data-priority="3">Criar campo no banco</th>
                    <th data-priority="1">label do banco</th>
                    <th data-priority="3">Pontos</th>
                    <th data-priority="3">Peso</th>
                  </tr>
                </thead> --}}
                <tbody>

                  @php
                    $grupoSimilar = 0;
                  @endphp
                  @foreach ($dadosUsuario as $item)
                    
                    @php
                      $grupoSimilarTemp = $item['cd_gr_similares'];
                    @endphp

                    @if ($grupoSimilar!=$grupoSimilarTemp)
                    <thead>
                        <tr>
                          <th>Indicadores</th>
                          <th data-priority="1">Class.</th>
                          

                          @if ($item['label_vl_extra_1']!=0)
                          <th data-priority="1"> {{ $item['label_vl_extra_1']}} </th>
                          @endif
                          @if ($item['label_vl_extra_2']!=0)
                          <th data-priority="1"> {{ $item['label_vl_extra_2']}} </th>
                          @endif
                          
                          <th data-priority="3"> {{ $item['label_vl_lcto']}}  </th>
                          <th data-priority="3">Pontos</th>
                          <th data-priority="3">Peso</th>
                        </tr>
                      </thead> 
                    @endif

                    <tr>
                    <th>{{$item['nm_indicador']}}</th>
                    <td>
                      {{$item['ordem']}}º
                      {{-- <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i> --}}
                    </td>

                    @if ($item['label_vl_extra_1']!=0)
                    <td> 
                      @if ($item['sufixo_1']!=null) {{-- caso tenha sufixo (porcentagem) --}}
                      {{$item['vl_extra_1']*100}}{{$item['sufixo_1']}}
                      @else
                      {{$item['prefixo_1']}}{{ number_format( $item['vl_extra_1'], 0, ',', '.')}} 

                      @endif
                  
                    </td>  
                  @endif

                        @if ($item['label_vl_extra_2']!=0)
                          <td> 
                            @if ($item['sufixo_2']!=null) {{-- caso tenha sufixo (porcentagem) --}}
                            {{$item['vl_extra_2']*100}}{{$item['sufixo_2']}}
                            @else
                            {{$item['prefixo_2']}}{{ number_format( $item['vl_extra_2'], 0, ',', '.')}} 

                            @endif
                        
                          </td>  
                        @endif

                    
                    

                    <td>
                      @if ($item['sufixo']!=null) {{-- caso tenha sufixo (porcentagem) --}}
                      {{$item['vl_lcto']*100}}{{$item['sufixo']}}
                      @else {{-- caso nao tenha sufixo (cifrao) --}}
                      {{$item['prefixo']}}{{ number_format($item['vl_lcto'], 0, ',', '.')}}
                      @endif

                    </td>
                    
                    <td> {{$item['pontuacao']}} </td>
                    <td> {{$item['pontuacao_base']}} </td>
                    </tr>
                    @php
                
                    $grupoSimilar=$item['cd_gr_similares']
                    @endphp
                  
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {{-- fim primeiro foreach --}}




      </div>
    </div>
  </div>
</div>



{{-- <div class="col-lg-6">
  <div class="row">
    <div class="table-rep-plugin">
      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table table-striped">
          <thead>
            <tr>
              <th>Indicadores</th>
              <th data-priority="1">Class.</th>
              <th data-priority="3">Carteira</th>
              <th data-priority="1">Per Capita</th>
              <th data-priority="3">Pontos</th>
              <th data-priority="3">Peso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>CARTEIRA DE CRÉDITO PF PER CAPITA</th>
              <td>
                3
                <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
              </td>
              <td>11.223.188</td>
              <td>49</td>
              <td>120</td>
              <td>15</td>
            </tr>
            <tr>
              <th>CARTEIRA DE CRÉDITO PJ PER CAPITA</th>
              <td>
                9
                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
              </td>
              <td>440.733</td>
              <td>25</td>
              <td>30</td>
              <td>15</td>
            </tr>
            <tr>
              <th>DAP + FUNDOS PF PER CAPITA</th>
              <td>
                6
                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
              </td>
              <td>11.540.842</td>
              <td>41</td>
              <td>150</td>
              <td>30</td>
            </tr>
            <tr>
              <th>DAP + FUNDOS PJ PER CAPITA</th>
              <td>
                6
                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
              </td>
              <td>1.597.774</td>
              <td>28</td>
              <td>150</td>
              <td>30</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end row -->

  <div class="row">
    <div class="table-rep-plugin">
      <div class="table-responsive table-sm table-bordered mb-0" data-pattern="priority-columns">
        <table id="tech-companies-2" class="table table-striped">
          <thead>
            <tr>
              <th>Indicadores</th>
              <th data-priority="1">Class.</th>
              <th data-priority="3">Unicred</th>
              <th data-priority="3">PR</th>
              <th data-priority="1">%</th>
              <th data-priority="3">Pontos</th>
              <th data-priority="3">Peso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>STRESS PF</th>
              <td>
                1
                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
              </td>
              <td>7.780.812</td>
              <td>2.582.797</td>
              <td>75,08%</td>
              <td>100</td>
              <td>10</td>
            </tr>
            <tr>
              <th>STRESS PJ</th>
              <td>
                4
                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
              </td>
              <td>417.349</td>
              <td>573.061</td>
              <td>42,14%</td>
              <td>70</td>
              <td>10</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end row -->

  <div class="row">
    <div class="table-rep-plugin">
      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
        <table id="tech-companies-3" class="table table-striped">
          <thead>
            <tr>
              <th>Indicadores</th>
              <th data-priority="1">Class.</th>
              <th data-priority="3">Rec. Prod/Ser</th>
              <th data-priority="3">Rec. Total</th>
              <th data-priority="1">%</th>
              <th data-priority="3">Pontos</th>
              <th data-priority="3">Peso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>REC. DE PROD E SERV / REC. TOTAL</th>
              <td>
                2
                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
              </td>
              <td>130.079</td>
              <td>1.632.659</td>
              <td>8,0%</td>
              <td>225</td>
              <td>25</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end row -->

  <div class="row">
    <div class="table-rep-plugin">
      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
        <table id="tech-companies-3" class="table table-striped">
          <thead>
            <tr>
              <th>Indicadores</th>
              <th data-priority="1">Class.</th>
              <th data-priority="3">Média 2021</th>
              <th data-priority="3">Média 2022</th>
              <th data-priority="1">% / Vol.</th>
              <th data-priority="3">Pontos</th>
              <th data-priority="3">Peso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>RESULTADO TOTAL %</th>
              <td>
                9
                <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
              </td>
              <td>73.980</td>
              <td>41.361</td>
              <td>-44,09%</td>
              <td>0</td>
              <td>20</td>
            </tr>
            <tr>
              <th>RESULTADO TOTAL VOL.</th>
              <td>
                9
                <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
              </td>
              <td>73.980</td>
              <td>41.361</td>
              <td>32.620</td>
              <td>0</td>
              <td>15</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end row -->

  <div class="row">
    <div class="table-rep-plugin">
      <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
        <table id="tech-companies-3" class="table table-striped">
          <thead>
            <tr>
              <th>Indicadores</th>
              <th data-priority="1">Class.</th>
              <th data-priority="3">Cooperados</th>
              <th data-priority="3">Fidelizados</th>
              <th data-priority="1">%</th>
              <th data-priority="3">Pontos</th>
              <th data-priority="3">Peso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>FIDELIZAÇÃO PF</th>
              <td>
                2
                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
              </td>
              <td>279</td>
              <td>148</td>
              <td>53%</td>
              <td>270</td>
              <td>30</td>
            </tr>
            <tr>
              <th>FIDELIZAÇÃO PJ</th>
              <td>
                5
                <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
              </td>
              <td>56</td>
              <td>18</td>
              <td>32%</td>
              <td>180</td>
              <td>30</td>
            </tr>
            <tr>
              <th>CARTÃO DE CRÉDITO FIDELIZAÇÃO</th>
              <td>
                1
                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
              </td>
              <td>335</td>
              <td>145</td>
              <td>43%</td>
              <td>100</td>
              <td>10</td>
            </tr>
            <tr>
              <th>FIDELIZAÇÃO PREVIDÊNCIA</th>
              <td>
                3
                <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
              </td>
              <td>279</td>
              <td>86</td>
              <td>30%</td>
              <td>80</td>
              <td>10</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end row -->
</div> --}}


<!-- COOPERATIVA DEFAULT FIM -->

<!-- end page content -->
</div>
<!-- container-fluid -->
</div>



</div>
</div>


@endsection