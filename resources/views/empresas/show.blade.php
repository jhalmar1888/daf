@extends('layout')

@section('contenido')
  
    <div class="col-sm-8">
       <h2>
            Editar Empresa
            
            <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-link">editar</a>

            <a href="{{ route('empresas.index', $empresa->id) }}" class="btn btn-link">listado</a>
       </h2>
             
            <p>{{ $empresa->NomEmpresa }}</p>    
            <p>{{ $empresa->Banco }}</p>    
            <p>{{ $empresa->Cuenta }}</p> 
                                
                  
    </div>
    <div class="col-sm-4">
    @include('products.fragment.aside')
    </div>

@endsection