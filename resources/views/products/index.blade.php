@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-sm-12">
           <h2>
                Lista de Ordenes de Pago
                    <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nueva Orden de Pago</a>
           </h2>   
            <div class="panel-body">
                @include('products.fragment.info')
                <div class="col-md-12 ">
                    <div class="panel panel-inverse" >
                        <div class="panel-heading">
                            <h4 class="panel-title">Tabla de cheques</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><strong>ID</strong></th>
                                            <th><strong>No. Orden Pago</strong></th>
                                            <th><strong>No. Cheque</strong></th>
                                            <th><strong>Fecha</strong></th>
                                            <th><strong>Objeto</strong></th>
                                            <th><strong>Detalle</strong></th>
                                            <th><strong>Doc. Respaldo</strong></th>
                                            <th><strong>Monto</strong></th>
                                            <th><strong>Literal</strong></th>                                        
                                            <th><strong>A nombre de:</strong></th>
                                            <th><strong>No. Cuenta</strong></th>
                                            <th text=align-center><strong>OPCIONES</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->Ordenpago }}</td>
                                            <td>{{ $product->Cheque }}</td>
                                            <td>{{ $product->Fecha }}</td>
                                            <td>{{ $product->Objeto }}</td>
                                            <td>{{ $product->Detalle }}</td>
                                            <td>{{ $product->DocRespaldo }}</td>                                
                                            <td>{{ $product->MontoNumero }}</td>
                                            <td>{{ $product->MontoLiteral }}</td>                                
                                            <td>{{ $product->NomEmpresa ? $product->empresas->NomEmpresa : '' }}</td>
                                            <td>{{ $product->Cuenta ? $product->empresa->Cuenta : '' }}</td>
                                            <td>
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info m-r-5 m-b-5">VER</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning m-r-5 m-b-5">EDITAR</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                                {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger m-r-5 m-b-5" >BORRAR</button>
                                                    <td>
                                                        <a  class="btn btn-default m-r-5 m-b-5" href="{{ route('product.print', $product->id) }}">IMPRIMIR</a>
                                                    </td>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                    {!! $products->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection