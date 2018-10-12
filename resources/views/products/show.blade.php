@extends('layouts.app')
@section('content')
<div class="row ">
    <!-- begin col-6 -->
    <div class="col-md-6">
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
            <div class="panel-body ">
       <h2>
            Editar Cheque
            
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">editar</a>

            <a href="{{ route('products.index', $product->id) }}" class="btn btn-warning m-r-5 m-b-5">listado</a>
       </h2>
            <p class="text-center"><strong  >Orden de Pago</strong> </p>
            <p class="text-center">{{ $product->Ordenpago }}</p>
            <p class="text-center"><strong>Cheque</strong>  </p>  
            <p class="text-center">{{ $product->Cheque }}</p>
            <p class="text-center"><strong>Fecha</strong> </p>   
            <p class="text-center">{{ $product->Fecha }}</p>
            <p class="text-center"><strong>Obejeto</strong>  </p>
            <p class="text-center">{{ $product->Objeto }}</p>
            <p class="text-center"><strong>Detalle</strong>  </p>   
            <p class="text-center">{{ $product->Detalle }}</p>
            <p class="text-center"><strong>Documento de Respaldo</strong>   </p>  
            <p class="text-center">{{ $product->DocRespaldo }}</p>
            <p class="text-center"><strong>Monto Numero</strong>  </p>
            <p class="text-center">{{ $product->MontoNumero }}</p>
            <p class="text-center"><strong>Monto Literalo</strong> </p>
            <p class="text-center">{{ $product->MontoLiteral }}</p>
            <p class="text-center"><strong>Nombre Empresa</strong> </p>
            <p class="text-center">{{  $product->NomEmpresa ? $product->empresas->NomEmpresa : ''  }}</p>
            <p class="text-center"><strong>Cuenta</strong>    </p>
            <p class="text-center">{{ $product->Cuenta ? $product->empresa->Cuenta : '' }}</p>
     
    </div>
      </div>
        </div>
    
@endsection