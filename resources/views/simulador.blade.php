@extends('layouts.master')

@section('title') Superação @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Superação @endslot
@slot('title') Premiação @endslot
@endcomponent
<div class="row">
    <div class="col-12">
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
                <table>

                    <tbody>
                        <tr style="cursor: pointer;">
                            <td>SIMULADOR</td>

                        </tr>
                    </tbody>
                </table>

            </div>


        </div>


        <div class="row">
            <!-- COOPERATIVA DEFAULT -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="table-rep-plugin">
                        <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr style="cursor: pointer;">
                                        <th>Indicadores</th>
                                        <th data-priority="1">Class.</th>
                                        <th data-priority="3">Carteira</th>
                                        <th data-priority="1">Per Capita</th>
                                        <th data-priority="3">Pontos</th>
                                        <th data-priority="3">Peso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="cursor: pointer;">
                                        <th>CARTEIRA DE CRÉDITO PF PER CAPITA</th>
                                        <td>
                                            3
                                            <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                                        </td>
                                        <td class="valoresAtuais">11.223.188</td>
                                        <td>49</td>
                                        <td>120</td>
                                        <td class="peso">15</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>CARTEIRA DE CRÉDITO PJ PER CAPITA</th>
                                        <td>
                                            9
                                            <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                                        </td>
                                        <td class="valoresAtuais">440.733</td>
                                        <td>25</td>
                                        <td>30</td>
                                        <td class="peso">15</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>DAP + FUNDOS PF PER CAPITA</th>
                                        <td>
                                            6
                                            <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                                        </td>
                                        <td class="valoresAtuais">11.540.842</td>
                                        <td>41</td>
                                        <td>150</td>
                                        <td class="peso">30</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>DAP + FUNDOS PJ PER CAPITA</th>
                                        <td>
                                            6
                                            <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                                        </td>
                                        <td class="valoresAtuais">1.597.774</td>
                                        <td>28</td>
                                        <td>150</td>
                                        <td class="peso">30</td>
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
                                    <tr style="cursor: pointer;">
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
                                    <tr style="cursor: pointer;">
                                        <th>STRESS PF</th>
                                        <td>
                                            1
                                            <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                                        </td>
                                        <td class="valoresAtuais">7.780.812</td>
                                        <td>2.582.797</td>
                                        <td>75,08%</td>
                                        <td>100</td>
                                        <td class="peso">10</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>STRESS PJ</th>
                                        <td>
                                            4
                                            <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                                        </td>
                                        <td class="valoresAtuais">417.349</td>
                                        <td>573.061</td>
                                        <td>42,14%</td>
                                        <td>70</td>
                                        <td class="peso">10</td>
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
                                    <tr style="cursor: pointer;">
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
                                    <tr style="cursor: pointer;">
                                        <th>REC. DE PROD E SERV / REC. TOTAL</th>
                                        <td>
                                            2
                                            <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                                        </td>
                                        <td class="valoresAtuais">130.079</td>
                                        <td>1.632.659</td>
                                        <td>8,0%</td>
                                        <td>225</td>
                                        <td class="peso">25</td>
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
                                    <tr style="cursor: pointer;">
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
                                    <tr style="cursor: pointer;">
                                        <th>RESULTADO TOTAL %</th>
                                        <td>
                                            9
                                            <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                                        </td>
                                        <td class="valoresAtuais">73.980</td>
                                        <td>41.361</td>
                                        <td>-44,09%</td>
                                        <td>0</td>
                                        <td class="peso">20</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>RESULTADO TOTAL VOL.</th>
                                        <td>
                                            9
                                            <i class="fas fa-arrow-circle-down" style="color: #f46a6a"></i>
                                        </td>
                                        <td class="valoresAtuais">73.980</td>
                                        <td>41.361</td>
                                        <td>32.620</td>
                                        <td>0</td>
                                        <td class="peso">15</td>
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
                                    <tr style="cursor: pointer;">
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
                                    <tr style="cursor: pointer;">
                                        <th>FIDELIZAÇÃO PF</th>
                                        <td>
                                            2
                                            <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                                        </td>
                                        <td class="valoresAtuais">279</td>
                                        <td>148</td>
                                        <td>53%</td>
                                        <td>270</td>
                                        <td class="peso">30</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>FIDELIZAÇÃO PJ</th>
                                        <td>
                                            5
                                            <i class="fas fa-arrow-circle-up" style="color: #34c38f"></i>
                                        </td>
                                        <td class="valoresAtuais">56</td>
                                        <td>18</td>
                                        <td>32%</td>
                                        <td>180</td>
                                        <td class="peso">30</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>CARTÃO DE CRÉDITO FIDELIZAÇÃO</th>
                                        <td>
                                            1
                                            <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                                        </td>
                                        <td class="valoresAtuais">335</td>
                                        <td>145</td>
                                        <td>43%</td>
                                        <td>100</td>
                                        <td class="peso">10</td>
                                    </tr>
                                    <tr style="cursor: pointer;">
                                        <th>FIDELIZAÇÃO PREVIDÊNCIA</th>
                                        <td>
                                            3
                                            <i class="fas fa-arrow-circle-right" style="color: #f1b44c"></i>
                                        </td>
                                        <td class="valoresAtuais">279</td>
                                        <td>86</td>
                                        <td>30%</td>
                                        <td>80</td>
                                        <td class="peso">10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- COOPERATIVA DEFAULT FIM -->

            <!-- COOPERATIVA COMPARADA -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="row">
                        <div class="table-rep-plugin">
                            <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class=" table-striped table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th>EVOLUIR</th>
                                            <th data-priority="1">PROJETADO</th>
                                            <th data-priority="3">CLASS.</th>
                                            <th data-priority="1">EVOL.</th>
                                            <th data-priority="3">TOTAL PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td class="simulador" data-field="ccpfpp"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td class="evolucao"></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                        <tr data-id="2" style="cursor: pointer;">
                                            <td class="simulador" data-field="ccpipp"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td class="evolucao"></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                        <tr data-id="3" style="cursor: pointer;">
                                            <td class="simulador" data-field="dapfpfpp"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td class="evolucao"></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                        <tr data-id="4" style="cursor: pointer;">
                                            <td class="simulador" data-field="dapfpjpp"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td class="evolucao"></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-rep-plugin">
                            <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table-striped table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th style="color:transparent;user-select: none;">EVOLUIR</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">PROJETADO</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">CLASS.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">EVOL.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">TOTAL.PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-id="5" style="cursor: pointer;">
                                            <td class="simulador" data-field="spf"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td class="evolucao"></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>

                                        <tr data-id="6" style="cursor: pointer;">
                                            <td class="simulador" data-field="spj"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-rep-plugin">
                            <div class="table-responsive table-bordered mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table-striped table table-editable table-nowrap align-middle table-edits">
                                    <thead>

                                        <tr style="cursor: pointer;">
                                            <th style="color:transparent;user-select: none;">EVOLUIR</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">PROJETADO</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">CLASS.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">EVOL.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">TOTAL.PTS</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr data-id="7" style="cursor: pointer;">
                                            <td class="simulador" data-field="rpsrt"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-rep-plugin">
                            <div class="table-striped table table-editable table-nowrap align-middle table-edits" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th style="color:transparent;user-select: none;">EVOLUIR</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">PROJETADO</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">CLASS.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">EVOL.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">TOTAL.PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-id="8" style="cursor: pointer;">
                                            <td class="simulador" data-field="rt"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>

                                        <tr data-id="9" style="cursor: pointer;">
                                            <td class="simulador" data-field="rtv"></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-rep-plugin">
                            <div class="table-striped table table-editable table-nowrap align-middle table-edits" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table-striped table table-editable table-nowrap align-middle table-edits">
                                    <thead>
                                        <tr style="cursor: pointer;">
                                            <th style="color:transparent;user-select: none;">EVOLUIR</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">PROJETADO</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">CLASS.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">EVOL.</th>
                                            <th style="color:transparent;user-select: none;" data-priority="1">TOTAL.PTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-id="10" style="cursor: pointer;">
                                            <td class="simulador" data-field=""></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                        <tr data-id="11" style="cursor: pointer;">
                                            <td class="simulador" data-field=""></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                        <tr data-id="12" style="cursor: pointer;">
                                            <td class="simulador" data-field=""></td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                        <tr data-id="13" style="cursor: pointer;">
                                            <td class="simulador" data-field=""> </td>
                                            <th class="projetado hackTabelaAltura">tt</th>
                                            <td class="classificacaoSimulada"></td>
                                            <td></td>
                                            <td class="pontosSimulados"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@section('script')
    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
    <script>
      
     
        var formataDinheiro = new Intl.NumberFormat('pt-BR', {
          style: 'currency',
          currency: 'BRL',
          // These options are needed to round to whole numbers if that's what you want.
          //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
          //maximumFractionDigits: 0, // (causes 2500.99 to be printed as $2,501)
      });
      
      function editarTabelas(celula){
        var tipo = ''

        if(celula<=7 || celula>=10){

          tipo = "numero"
        }
        else{

          tipo = "ainda nao sei"


        }


        console.log(celula)
        console.log(tipo)
        var stringCelula='[data-id="'+celula+'"] .simulador'
        var celulaSimulador= document.querySelector(stringCelula)
        var celulaValorAtual = document.querySelectorAll('.valoresAtuais')
        


        var valorCelulaAtual = parseInt((celulaValorAtual[celula-1].innerHTML).replace(/\./g,"")) 
        var valorCelula= parseInt(celulaSimulador.innerHTML)
        var celulaProjetado= document.querySelectorAll('.projetado')[celula-1]
        celulaProjetado.classList.remove("hackTabelaAltura")
        celulaProjetado.innerHTML=(formataDinheiro.format(valorCelula+valorCelulaAtual)).replace('R$',"")
        
        var classificacao = document.querySelectorAll(".classificacaoSimulada")
        var peso= document.querySelectorAll(".peso")
        classificacao[celula-1].innerHTML="1°" 
        var totalPts = document.querySelectorAll(".pontosSimulados")
        totalPts[celula-1].innerHTML=(parseInt(peso[celula-1].innerHTML))*10

      }


      $("table tr").editable({
        keyboard: true,
        dblclick: true ,
        button: true,
        buttonSelector: ".edit",
        dropdowns: {},
        maintainWidth: true,
        edit: function() {console.log(this)},
        save: function(values) {editarTabelas($(this).data('id'))},
        cancel: function(values) {}
      });

      

    </script>
@endsection


@endsection