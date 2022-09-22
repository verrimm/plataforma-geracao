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
    
<div class="row">
    <div class="col-12">
        <div class="container">
            <ul class="timeline">
                <li class="active">Bacon</li>
                <li>Rib</li>
                <li>Sausage</li>
            </ul>
        </div>
    </div>
</div>

@section('script')
    <!-- Table Editable plugin -->
    <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>
@endsection
@endsection
