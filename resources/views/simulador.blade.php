@extends('layouts.master')

@section('title')
    Superação
@endsection

@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive Table css -->
    <link href="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

    <style>
        .table-striped>tbody>tr:nth-of-type(odd)>* {
            --bs-table-accent-bg: #e5e5e5 !important;

        }
    </style>
@endsection


@section('content')
    {{-- LOADER DA PAGINA --}}
    <div class="loader" id="fadeOut"
        style="position: fixed; z-index: 999999; top: 0; left: 0; width: 100%; height: 100%; background: #222736; display: block; justify-content: center; align-items: center;">
        <img style="left: 50%;top: 50%;position: absolute;" src="{{ URL::asset('assets/images/preloader.gif') }}" />
    </div>
    @component('components.breadcrumb')
        @slot('li_1')
            Superação
        @endslot
        @slot('title')
            Simulador
        @endslot
    @endcomponent
    <!-- end page title -->

    <div class="row" style="text-align: center;">
        <div class="col-12">
            <!-- start page content -->
            <div class="row">
                <div class="row my-3">
                    <div class="card mini-stats-wid border-primary">
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <p>
                    Lorem ipsum dolor sit.
                </p>
            </div>

            <div class="row">
                <div class="col-6 mb-3">
                    <label class="col-md-3 col-form-label">Minha unidade:</label>
                    <select class="form-select" style="text-align: center" disabled>
                        <option>
                            {{ $minhaUnidade['nm_posto'] }}
                        </option>
                    </select>
                </div>

                <div class="col-6 mb-3">
                    <label class="col-md-12 col-form-label">Selecione a Meta:</label>
                    <select id="selectUnidades" class="form-control select2">
                        <option id="opcaoPadrao">Selecione</option>
                        <option value="">1º no grupo - Conservador</option>
                        <option value="">1º no grupo - Equilibrado</option>
                        <option value="">1º no grupo - Arrojado</option>
                    </select>
                </div>
                <span>{{$primeiroColocadoGrupo['nm_posto']}}</span>
                <label class="col-md-6 col-form-label">Classificação Geral: {{ $ranking['posicao_ranking'] }}º</label>
            </div>

            <div class="row">
                <!-- COOPERATIVA DEFAULT -->
                <div class="col-lg-6 dividerComparador"> {{-- dividerComparador cria um separador após coluna --}}
                    {{-- inicio primeiro foreach --}}
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive table-bordered mb-0">
                                        <table id="tabelaInicialComparador" class="table table-lg align-middle">
                                            <tbody>
                                                @php
                                                    $grupoSimilar = 0;
                                                @endphp
                                                @foreach ($dadosUsuario as $item)
                                                    @php
                                                        $grupoSimilarTemp = $item['cd_gr_similares'];
                                                    @endphp

                                                    @if ($grupoSimilar != $grupoSimilarTemp)
                                                        <thead class="headComparador">
                                                            <tr>
                                                                <th>Indicador</th>
                                                                <th data-priority="1">Posição</th>

                                                                @if ($item['label_vl_extra_1'] != 0)
                                                                    <th data-priority="1"> {{ $item['label_vl_extra_1'] }}
                                                                    </th>
                                                                @endif
                                                                @if ($item['label_vl_extra_2'] != 0)
                                                                    <th data-priority="1"> {{ $item['label_vl_extra_2'] }}
                                                                    </th>
                                                                @endif

                                                                <th data-priority="3" colspan="2">
                                                                    {{ $item['label_vl_lcto'] }} </th>
                                                                {{-- <th data-priority="3">Pts</th> --}}
                                                            </tr>
                                                        </thead>
                                                    @endif
                                                    <tr class="linhaReferencia">
                                                        <th>{{ $item['nm_indicador'] }}</th>
                                                        <td class="referenciaComparador">{{ $item['ordem'] }}º</td>
                                                        @if ($item['label_vl_extra_1'] != 0)
                                                            <td>
                                                                @if ($item['sufixo_1'] != null)
                                                                    {{-- caso tenha sufixo (porcentagem) --}}
                                                                    {{ $item['vl_extra_1'] * 100 }}{{ $item['sufixo_1'] }}
                                                                @else
                                                                    {{ $item['prefixo_1'] }}{{ number_format($item['vl_extra_1'], 0, ',', '.') }}
                                                                @endif
                                                            </td>
                                                        @endif
                                                        @if ($item['label_vl_extra_2'] != 0)
                                                            <td>
                                                                @if ($item['sufixo_2'] != null)
                                                                    {{-- caso tenha sufixo (porcentagem) --}}
                                                                    {{ $item['vl_extra_2'] * 100 }}{{ $item['sufixo_2'] }}
                                                                @else
                                                                    {{ $item['prefixo_2'] }}{{ number_format($item['vl_extra_2'], 0, ',', '.') }}
                                                                @endif
                                                            </td>
                                                        @endif
                                                        <td colspan="2">
                                                            @if ($item['sufixo'] != null)
                                                                {{-- caso tenha sufixo (porcentagem) --}}
                                                                {{ $item['vl_lcto'] * 100 }}{{ $item['sufixo'] }}
                                                            @else
                                                                {{-- caso nao tenha sufixo (cifrao) --}}
                                                                {{ $item['prefixo'] }}{{ number_format($item['vl_lcto'], 0, ',', '.') }}
                                                            @endif
                                                        </td>
                                                        {{-- <td> {{$item['pontuacao']}} </td> --}}
                                                    </tr>
                                                    @php
                                                        $grupoSimilar = $item['cd_gr_similares'];
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- fim primeiro foreach --}}

                </div>
                <div id="example" class="col-lg-6">
                </div>
            </div>
        </div>
    </div>
    </div>

    <form id="formComparador" action="{{ route('comparadorAjax') }}" class="form-horizontal d-none " method="POST"
        enctype="multipart/form-data">
        @csrf
        <input name="unidade" class="inputComparador" type="text">
    </form>

    <!-- COOPERATIVA DEFAULT FIM -->

    <!-- end page content -->
    </div>
    <!-- container-fluid -->
    </div>

    </div>
    </div>

@section('script-bottom')
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

    <script>
        // Carrega Loader por 1seg na troca de modo noturno
        $('.loader').show();
        // Adiciona classe para fechar sidebar
        document.getElementById("body").classList.add("sidebar-enable");
        document.getElementById("body").classList.add("vertical-collpsed");
        setTimeout(function() {
            $('.loader').hide();
        }, 500);
        // ================================================//


    function seletorMes(elemento){


            console.log( elemento.innerText)

            var formulario = document.getElementById('formSeletorMes') 
            var inputFormullario =document.querySelector('#formSeletorMes .inputMes')
            inputFormullario.setAttribute('value',elemento.innerText)
            var formData = new FormData(formulario)
            var link = "seletorMesRanking"

            $.ajax({
                type: 'POST',
                url: link,
                data: formData ,
                processData: false,
                contentType: false
                , success: function(resposta){  
                teste = resposta
                var formulario = document.getElementById('paginaRanking')
                formulario.innerHTML=resposta
                console.log("sucesso")  
                ativaSeletorMes(),
                rankingGrupos()
                },
                error: function(resposta){
                    console.log("erro")
                }
            })


    }


    function ativaSeletorMes(){ 

        var mesAtualdata = document.querySelector("[data-mesSelecionado]").dataset.messelecionado
        var dateMesAtual = Date.parse(mesAtualdata) // converter string em milisegundos para  ser convertido em "date"
        
        var dataDummyMs = Date.now() // existe pra calcular a diferença de fuso horario
        var dataDummyobjeto =  new Date(dataDummyMs) // existe pra calcular a diferença de fuso horario

        var objetoData = new Date(dateMesAtual+((dataDummyobjeto.getTimezoneOffset()*60)*1000)) //variavel tipo date
        // aqui rola a conta pegando o mes atual + a diferença de fuso horario que vem em minutos
        // os minutos são convertidos em milisegundos e somados na data
       
        // objetoData.getMonth()

        var indexMes = objetoData.getMonth()+1 // os meses vem como 0 a 11, por isso adicionei mais um 
        // para ficar semanticamente melhor no codigo

        ////////////////////////////////// mesma coisa só que para desativar
        var mesUltimadata = document.querySelector("[data-mesSelecionado]").dataset.ultimadata
        var dateMesAtual = Date.parse(mesUltimadata) // converter string em milisegundos para  ser convertido em "date"
    
        var dataDummyMs1 = Date.now() // existe pra calcular a diferença de fuso horario
        var dataDummyobjeto1 =  new Date(dataDummyMs1) // existe pra calcular a diferença de fuso horario

        var objetoData1 = new Date(dateMesAtual+((dataDummyobjeto1.getTimezoneOffset()*60)*1000)) //variavel tipo date
        // aqui rola a conta pegando o mes atual + a diferença de fuso horario que vem em minutos
        // os minutos são convertidos em milisegundos e somados na data
       
        // objetoData.getMonth()

        var indexUltimoMes = objetoData1.getMonth()+2 // os meses vem como 0 a 11, por isso adicionei mais um 
        // para ficar semanticamente melhor no codigo

        for (var i = indexUltimoMes; i < 13; i++) {
            console.log(i);
            // more statements
            console.log('[data-mes="'+i+'"]')
            document.querySelector('[data-mes="'+i+'"]').classList.add('disabled');
        }

        document.querySelector('[data-mes="'+indexMes+'"]').classList.add("active");

    }       

        $('document').ready(function(){    
            ativaSeletorMes()
         });


        var teste = []

        function tabelaComparador() {

            var formulario = document.getElementById('formComparador')
            var formData = new FormData(formulario)
            var link = "comparadorAjax"

            $.ajax({
                type: 'POST',
                url: link,
                data: formData,
                processData: false,
                contentType: false,
                success: function(resposta) {
                    teste = resposta
                    var formulario = document.getElementById('example')
                    formulario.innerHTML = resposta
                    validaComparador()
                },
                error: function(resposta) {
                    validaComparador()
                }
            })
        }

        function imprimirComparador() {

            $('#selectUnidades').select2();

            $('#selectUnidades').on('select2:select', function(e) {
                var data = e.params.data;

                document.querySelector('#formComparador .inputComparador').setAttribute('value', data.id)
                tabelaComparador()

            });

        }

        function validaComparador() {

            var referenciaComparador = document.querySelectorAll(".referenciaComparador");
            var metaComparador = document.querySelectorAll(".metaComparador");
            var linhaReferencia = document.querySelectorAll(".linhaReferencia");
            var linhaMeta = document.querySelectorAll(".linhaMeta");
            var selecao = document.getElementById("select2-selectUnidades-container"); //Caixa de seleção

            if (selecao.innerHTML == 'Selecione') {
                for (var i = 0; i < referenciaComparador.length; i++) {
                    linhaReferencia[i].classList.remove("bg-success-comparador");
                    linhaReferencia[i].classList.remove("bg-danger-comparador");
                }
            } else {

                for (var i = 0; i < referenciaComparador.length; i++) {

                    if (parseInt(referenciaComparador[i].innerText) < parseInt(metaComparador[i].innerText)) {
                        linhaReferencia[i].classList.remove("bg-danger-comparador");
                        linhaReferencia[i].classList.add("bg-success-comparador");
                        linhaMeta[i].classList.add("bg-danger-comparador");
                    } else if (parseInt(referenciaComparador[i].innerText) > parseInt(metaComparador[i].innerText)) {
                        linhaReferencia[i].classList.remove("bg-success-comparador");
                        linhaReferencia[i].classList.add("bg-danger-comparador");
                        linhaMeta[i].classList.add("bg-success-comparador");
                    } else {
                        linhaReferencia[i].classList.add("bg-warning-comparador");
                        linhaMeta[i].classList.add("bg-warning-comparador");
                    }

                }
            }
        }

        $(document).ready(function() {
            $('#formComparador').submit(function(e) {
                e.preventDefault();
            });
            imprimirComparador()
        })
    </script>
@endsection
@endsection
