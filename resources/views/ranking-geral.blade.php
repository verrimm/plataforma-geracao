@extends('layouts.master')

@section('title')
    Superação
@endsection
@section('css')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Superação
        @endslot
        @slot('title')
            Ranking GRUPO {{ $dadosRanking[0]['cd_grupo'] }}
        @endslot
    @endcomponent



    <div class="col-xl-12" id="paginaRanking">

        <div class="row my-3">
            <div class="card mini-stats-wid border-primary">
                <div class="card-body" style="padding: 15px 0 0 0">
            <ul class="nav nav-pills mb-3" style="justify-content: space-evenly; padding-right: 0px;" id="pills-tab" data-mesSelecionado="{{$ultimaData}}" role="tablist" data-ultimaData = "{{$ultimaData}}" >
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="janeiro" data-bs-toggle="pill" data-bs-target="#pills-janeiro"
                        type="button" role="tab" aria-controls="pills-home" data-mes="1" aria-selected="true">Janeiro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button id="fevereiro" class="nav-link" id="fevereiro" data-bs-toggle="pill" data-bs-target="#pills-fevereiro"
                        type="button" role="tab" aria-controls="pills-profile" data-mes="2"aria-selected="false">Fevereiro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="marco" data-bs-toggle="pill" data-bs-target="#pills-marco"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="3"aria-selected="false">Março</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="abril" data-bs-toggle="pill" data-bs-target="#pills-abril"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="4"aria-selected="false">Abril</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="maio" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="5"aria-selected="false">Maio</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="junho" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="6"aria-selected="false">Junho</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="julho" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="7"aria-selected="false">Julho</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="agosto" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="8" aria-selected="false">Agosto</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="setembro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="9"aria-selected="false">Setembro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="outubro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="10" aria-selected="false">Outubro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="novembro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="11" aria-selected="false">Novembro</button>
                </li>
                <li class="nav-item" role="presentation" onClick="seletorMes(this)">
                    <button class="nav-link" id="dezembro" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact" data-mes="12" aria-selected="false">Dezembro</button>
                </li>
            </ul>
            </div>
            </div>
        </div>


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
                                        $contador = 0;
                                    @endphp
                                    @foreach ($dadosRanking as $itemRanking)
                                        @if ($contador == 0)
                                            <div class="ranking-table-row-leader-1">
                                                <div class="ranking-table-data-leader-1">
                                                    <div class="medal-gold"></div>
                                                </div>
                                                <div class="ranking-table-data">
                                                    {{ $itemRanking['nm_posto'] }}
                                                </div>
                                                <div class="ranking-table-data">
                                                    {{ $itemRanking['pt_ranking'] }}
                                                </div>
                                                <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                    @if ($itemRanking['evolucao']==-1)
                                                    <i class="fas fa-angle-up fa-2x success"></i>
                                                @else
                                                    @if ($itemRanking['evolucao']==1)
                                                        <i class="fas fa-angle-down fa-2x danger"></i>
                                                    @else
                                                        <i class="fas fa-minus fa-1x"></i>
                                                    @endif
                                                @endif
                                                </div>
                                            </div>
                                        @endif
                                        @if ($contador == 1)
                                            <div class="ranking-table-row-leader-2">
                                                <div class="ranking-table-data-leader-2">
                                                    <div class="medal-silver"></div>
                                                </div>
                                                <div class="ranking-table-data">
                                                    {{ $itemRanking['nm_posto'] }}
                                                </div>
                                                <div class="ranking-table-data">
                                                    {{ $itemRanking['pt_ranking'] }}
                                                </div>
                                                <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                    @if ($itemRanking['evolucao']==-1)
                                                    <i class="fas fa-angle-up fa-2x success"></i>
                                                @else
                                                    @if ($itemRanking['evolucao']==1)
                                                        <i class="fas fa-angle-down fa-2x danger"></i>
                                                    @else
                                                        <i class="fas fa-minus fa-1x"></i>
                                                    @endif
                                                @endif
                                                </div>
                                            </div>
                                        @endif
                                        @if ($contador == 2)
                                            <div class="ranking-table-row-leader-3">
                                                <div class="ranking-table-data-leader-3">
                                                    <div class="medal-bronze"></div>
                                                </div>
                                                <div class="ranking-table-data">
                                                    {{ $itemRanking['nm_posto'] }}
                                                </div>
                                                <div class="ranking-table-data">
                                                    {{ $itemRanking['pt_ranking'] }}
                                                </div>
                                                <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                    @if ($itemRanking['evolucao']==-1)
                                                    <i class="fas fa-angle-up fa-2x success"></i>
                                                @else
                                                    @if ($itemRanking['evolucao']==1)
                                                        <i class="fas fa-angle-down fa-2x danger"></i>
                                                    @else
                                                        <i class="fas fa-minus fa-1x"></i>
                                                    @endif
                                                @endif
                                                </div>
                                            </div>
                                        @endif

                                        @php
                                            $contador++;
                                        @endphp
                                    @endforeach

                                    <div class="ranking-table-body mb-3">

                                        @php
                                            $contador = 0;
                                        @endphp

                                        @foreach ($dadosRanking as $itemRanking2)
                                            @if ($contador > 2)
                                                <div class="ranking-table-row">
                                                    <div class="ranking-table-data">
                                                        {{ $contador + 1 }}
                                                    </div>
                                                    <div class="ranking-table-data">
                                                        {{ $itemRanking2['nm_posto'] }}
                                                    </div>
                                                    <div class="ranking-table-data">
                                                        {{-- <div class="complete"></div> --}}
                                                        {{ $itemRanking2['pt_ranking'] }}
                                                    </div>
                                                    <div class="ranking-table-data" style="padding-right: 1.125rem">
                                                       

                                                            @if ($itemRanking2['evolucao']==-1)
                                                                <i class="fas fa-angle-up fa-2x success"></i>
                                                            @else
                                                                @if ($itemRanking2['evolucao']==1)
                                                                    <i class="fas fa-angle-down fa-2x danger"></i>
                                                                @else
                                                                    <i class="fas fa-minus fa-1x"></i>
                                                                @endif
                                                            @endif


                                                    </div>
                                                </div>
                                            @endif

                                            @php
                                                $contador++;
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
                    @unless($dadosRanking[0]['cd_grupo'] == $item['cd_grupo'])
                        <div class="card border border-primary mini-stats-wid rankingCards bg-ranking-grupos"
                            data-bs-toggle="modal" data-bs-target=".{{ $item['nm_grupo'] }}" style="align-items: center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h3>{{ $item['nm_grupo'] }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  Large modal ranking -->
                        <div class="modal fade {{ $item['nm_grupo'] }}" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Ranking - {{ $item['nm_grupo'] }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-lg align-middle">
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
                                                        <tr class="linhaModal">
                                                            <th class="rankingModal" scope="row">{{ $itemLista['posicao_ranking'] }}</th>
                                                            <td>{{ $itemLista['nm_posto'] }}</td>
                                                            <td>{{ $itemLista['pt_ranking'] }}</td>
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


    
<form id="formSeletorMes"  action="{{ route('comparadorAjax') }}" class="form-horizontal  d-none" method="POST"  enctype="multipart/form-data">
    @csrf
  
    <input name="mes"  class="inputMes" type="text">
  
  </form>


@endsection

@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    {{-- select box filtro --}}
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

    <script>

    //CRIA CORES NOS RANKINGS DO MODAL 
        var rankingModal = document.querySelectorAll(".rankingModal");
        var linhaModal = document.querySelectorAll(".linhaModal");

        for (var i = 0; i < rankingModal.length; i++) {
            switch (rankingModal[i].innerText) {
                case "1":
                    linhaModal[i].classList.add("ouro");
                    break;

                case "2":
                    linhaModal[i].classList.add("prata");
                    break;

                case "3":
                    linhaModal[i].classList.add("bronze");
                    break;

                default:
                    console.log('default-ranking')
                    break;
            }
        }
    //

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
                ativaSeletorMes()
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

    </script>

@endsection
