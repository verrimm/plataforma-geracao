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
            <div id="myModal">clique aqui</div>
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

    @section('script')
    <script>
    // TOOLTIP PREMIACAO - PREMIACAO
    new jBox('Modal', {
    width: 300,
    height: 100,
    attach: '#myModal',
    title: 'My Modal Window',
    content: '<i>Hello there!</i>'
    });

    </script>
        <!-- Jbox Tooltips -->
        <script src="{{ URL::asset('/assets/libs/jbox/jbox.min.js') }}"></script>
        <!-- Table Editable plugin -->
        <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>
        <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
    @endsection
@endsection
