@extends('layouts.app')
@section('content')
<div class="row">
    <!-- begin col-6 -->
    <div class="col-md-10">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Tabla para Crear Nuevo Cheque</h4>
            </div>
            <div class="panel-body">
                <h2>
                        Nuevo Cheque
                        <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
                </h2>

                        @include('products.fragment.error')

                        {!! Form::open(['route' => 'products.store']) !!}

                            @include('products.fragment.form')

                        {!! Form::close() !!}  
        </div>
    </div>
</div>
   
@endsection