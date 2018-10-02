@extends('layout')

@section('content')
  
    <div class="col-sm-8">
       <h2>
            Editar Cheque
            
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">editar</a>

            <a href="{{ route('products.index', $product->id) }}" class="btn btn-link">listado</a>
       </h2>
           <strong>Orden de Pago</strong> 
            <p>{{ $product->Ordenpago }}</p>
            <strong>Cheque</strong>    
            <p>{{ $product->Cheque }}</p>
            <strong>Fecha</strong>    
            <p>{{ $product->Fecha }}</p>
            <strong>Obejeto</strong>  
            <p>{{ $product->Objeto }}</p>
            <strong>Detalle</strong>     
            <p>{{ $product->Detalle }}</p>
            <strong>Documento de Respaldo</strong>     
            <p>{{ $product->DocRespaldo }}</p>
            <strong>Monto Numero</strong>  
            <p>{{ $product->MontoNumero }}</p>
            <strong>Monto Literalo</strong> 
            <p>{{ $product->MontoLiteral }}</p>
            <strong>Nombre Empresa</strong> 
            <p>{{  $product->NomEmpresa ? $product->empresas->NomEmpresa : ''  }}</p>
            <strong>Cuenta</strong>    
            <p>{{ $product->Cuenta ? $product->empresa->Cuenta : '' }}</p>
     
    </div>
    <div class="col-sm-4">
    @include('products.fragment.aside')
    </div>

@endsection