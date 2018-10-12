@extends('layouts.app')
@section('content')
    <div class="col-sm-8">
    <h2>
            Nuevo Cheque
            <a href="{{ route('empresas.index') }}" class="btn btn-default pull-right">Listado</a>
       </h2>

            @include('products.fragment.error')

            {!! Form::open(['route' => 'empresas.store']) !!}

                @include('empresas.fragment.form')

            {!! Form::close() !!}        
    </div>
    
@endsection