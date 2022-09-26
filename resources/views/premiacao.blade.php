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
            Simulador
        @endslot
    @endcomponent

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/jbox/jbox.min.css') }}">
@endsection

<div class="row">
    <div class="col-xl-12">
        <div class="premios">
            <ul class="timeline">
                <li class="mesPremiacao">Jan</li>
                <li class="">Fev</li>
                <li class="trimestre">Mar</li>
                <li class="">Abr</li>
                <li class="">Mai</li>
                <li class="trimestre">Jun</li>
                <li class="">Jul</li>
                <li class="">Ago</li>
                <li class="active trimestre">Set</li>
                <li class="">Out</li>
                <li class="">Nov</li>
                <li class="trimestre">Dez</li>
            </ul>
        </div>
    </div>
</div>

<div class="premiacaoTrimestreTitle" style="">
    <p style="">🏆 Premiação Trimestral</p>
</div>
<div class="premiacaoTrimestre" style="display: none;">
    <div class="row">
        <div class="col-xl-12" style="padding-bottom: 10px">Pontos vão para o benefício do cartão VISA</div>
    </div>
    <div class="row">
        <div class="col-xl-6" style="border-right: 1px solid">{{-- Coluna esquerda --}}
            <div style="align-items: center; justify-content: center;">
                <ul class="list-group-flush">
                <div class="card bg-ouro" style="padding: 10px;align-items: center; justify-content: center; color: #fff">
                    <li class="list-group-item">1º - 10.000 Pts</li>
                </div>
                <div class="card bg-prata" style="padding: 10px; align-items: center; justify-content: center; color: #fff">
                    <li class="list-group-item">2º - 5.000 Pts</li>
                </div>
                <div class="card bg-bronze" style="padding: 10px; align-items: center; justify-content: center; color: #fff">
                    <li class="list-group-item">3º - 2.500 Pts</li>
                </div>
                </ul>
            </div>
        </div>
        <div class="col-xl-6">{{-- Coluna direita --}}
            <div class="card mini-stats-wid bg-primary" style="align-items: center; justify-content: center; padding-top: 10px;">
                <h6 style="color:#fff;">Gatilho 1</h6>
                <h3 style="color:#fff;">90%</h3>
            </div>
            <div class="card mini-stats-wid bg-primary" style="opacity: .5; align-items: center; justify-content: center; padding-top: 10px;">
                <h6 style="color:#fff;">Gatilho 2</h6>
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
            responsiveWidth: true,
            responsiveHeight: true,
            title: $('.premiacaoTrimestreTitle'),
            content: $('.premiacaoTrimestre'),
            footer: 'Última atualização em: Julho/22',
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
