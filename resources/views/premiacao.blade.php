@extends('layouts.master')

@section('title')
    Superação
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1')
            Superação
        @endslot
        @slot('title')
            Premiação
        @endslot
    @endcomponent

@section('css')
    <style>
        body {
            overflow: auto;
        }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/jbox/jbox.min.css') }}">
@endsection

<div class="row">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt incidunt, fuga libero doloribus, expedita voluptas alias est voluptatibus ipsum quis beatae repellat recusandae suscipit. Possimus quas voluptas ex nemo vitae.</p>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="premios">
            <ul class="timeline">
                <li class="mesPremiacao">Jan</li>
                <li class="">Fev</li>
                <li class="active trimestre"> Mar</li>
                <li class="">Abr</li>
                <li class="">Mai</li>
                <li class="active trimestre">Jun</li>
                <li class="">Jul</li>
                <li class="">Ago</li>
                <li class="active trimestre">Set</li>
                <li class="">Out</li>
                <li class="">Nov</li>
                <li class="active trimestre">Dez</li>
            </ul>
        </div>
    </div>
</div>

<div class="premiacaoTrimestre" style="display: none;">
    <div class="row">
        <div class="col-xl-12">
            <div class="d-flex" style="justify-content: space-evenly;">
                <p class="badge bg-primary">G0</p>
                <p class="badge bg-primary">G1</p>
                <p class="badge bg-primary">G2</p>
                <p class="badge bg-primary">G3</p>
                <p class="badge bg-primary">G4</p>
                <p class="badge bg-primary">G5</p>
                <p class="badge bg-primary">G6</p>
            </div>
        </div>
    </div>
    <div class="col-xl-12" style="padding-bottom: 2px">
        <p style="font-weight: 500">Programa Único de Fidelidade (Cartão Visa)</p>
    </div>
    <div class="row">
        <div class="col-xl-6" style="border-right: 1px solid">{{-- Coluna esquerda --}}
            <div style="align-items: center; justify-content: center;">
                <ul class="list-group-flush">
                    <div class="card bg-ouro"
                        style="padding: 10px;align-items: center; justify-content: center; color: #fff">
                        <li class="list-group-item">1º - 10.000 Pts</li>
                    </div>
                    <div class="card bg-prata"
                        style="padding: 10px; align-items: center; justify-content: center; color: #fff">
                        <li class="list-group-item">2º - 5.000 Pts</li>
                    </div>
                    <div class="card bg-bronze"
                        style="padding: 10px; align-items: center; justify-content: center; color: #fff">
                        <li class="list-group-item">3º - 2.500 Pts</li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="col-xl-6">{{-- Coluna direita --}}            
            <div class="card mini-stats-wid bg-primary" style="align-items: center; justify-content: center; padding-top: 10px;">
                <i class="far fa-question-circle tooltipGatilho1" style="left: 85%; bottom: 75%; position: absolute;"></i>
                <h6 style="color:#fff;">Seguros</h6>
                <h3 style="color:#fff;">90%</h3>
            </div>
            <div class="card mini-stats-wid bg-primary" style="opacity: .5; align-items: center; justify-content: center; padding-top: 10px;">
                <i class="far fa-question-circle tooltipGatilho2" style="left: 85%; bottom: 75%; position: absolute;"></i>
                <h6 style="color:#fff;">Consórcios</h6>
                <h3 style="color:#fff;">0%</h3>
            </div>
        </div>
    </div>
</div>

{{-- COOPERATIVAS
    PREMIAÇÃO ANUAL =  G7 e G8 – serão premiadas com um
    vale-viagem (voucher) no valor de R$ 30 mil. A premiação será entregue para as
    cooperativas, que definirão como será a destinação desse voucher
    --}}

{{-- AGENCIAS
    PREMIAÇÃO ANUAL =  G0, G1, G2, G3, G4, G5 e G6 – serão
    premiadas com um vale-viagem (voucher) no valor de R$ 30 mil. A premiação será
    entregue para as agências, que definirão como será a destinação desse voucher
    --}}

@section('script')
    <script>
        // TOOLTIP PREMIACAO - PREMIACAO
        new jBox('Tooltip', {
            attach: '.trimestre',
            animation: {
                open: 'pulse',
                close: 'pulse'
            },
            position: {
                y: 'bottom'
            },
            minWidth: 300,
            isolateScroll: true,
            adjustPosition: true,
            adjustTracker: true,
            responsiveWidth: true,
            responsiveHeight: true,
            title: 'Premiação Trimestral',
            content: $('.premiacaoTrimestre'),
            footer: 'Última atualização em: Julho/22',
            closeOnMouseleave: true
        });

        // TOOLTIP PREMIACAO - DESCRITIVO
        new jBox('Tooltip', {
            attach: '.tooltipGatilho1',
            animation: {
                open: 'pulse',
                close: 'pulse'
            },
            position: {
                y: 'bottom'
            },
            maxWidth: 300,
            isolateScroll: true,
            adjustPosition: true,
            adjustTracker: true,
            responsiveWidth: true,
            responsiveHeight: true,
            content: 'Atingimento de uma produção total anual de SEGUROS no valor de R$53,26 milhões efetivados via Unicred Corretora RS.',
            closeOnMouseleave: true
        });

        // TOOLTIP PREMIACAO - DESCRITIVO 2
        new jBox('Tooltip', {
            attach: '.tooltipGatilho2',
            animation: {
                open: 'pulse',
                close: 'pulse'
            },
            position: {
                y: 'bottom'
            },
            maxWidth: 300,
            isolateScroll: true,
            adjustPosition: true,
            adjustTracker: true,
            responsiveWidth: true,
            responsiveHeight: true,
            content: 'O Gatilho 2 só poderá ser habilitado se o Gatilho 1 também for atingido. Após isso, atingimento de uma produção total anual de CONSÓRCIOS no valor de R$150 milhões via Mapfre Consórcios',
            closeOnMouseleave: true
        });

    </script>
    <!-- Jbox Tooltips -->
    <script src="{{ URL::asset('/assets/libs/jbox/jbox.min.js') }}"></script>
    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
@endsection
@endsection