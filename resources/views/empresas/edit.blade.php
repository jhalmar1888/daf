@extends('layout')

@section('contenido')
  
    <div class="col-sm-8">
       <h2>
           Editar Empresa o Persona
            <a href="{{ route('empresas.index', $empresa->id) }}" class="btn btn-info pull-right">Listado</a>
       </h2>

       @include('products.fragment.error')
       
           {!! Form::model($empresa, ['route' => ['empresas.update', $empresa->id ], 'method' => 'PUT' ]) !!}

                @include('empresas.fragment.form')

           {!! Form::close() !!}       
    </div>
    <div class="col-sm-4">
        @include('products.fragment.aside')
    </div>

@endsection