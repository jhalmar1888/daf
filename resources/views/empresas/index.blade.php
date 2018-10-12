@extends('layouts.app')
@section('content')
  
    <div class="col-sm-12">
       <h2>
            Lista de Cuentas de Empresas y Personas
                <a href="{{ route('empresas.create') }}" class="btn btn-primary pull-right">Agregar nueva Empresa</a>
       </h2>   
    <div class="panel-body">    
       @include('products.fragment.info')
               <div class="col-md-12 ">
                    <div class="panel panel-inverse" >
                        <div class="panel-heading">
                            <h4 class="panel-title">Tabla de empresas</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                    <thead>
                        <tr>
                            <th><strong>ID</strong></th>
                            <th><strong>Nombre Empresa o Persona</strong></th>
                            <th><strong>Entidad Financiera</strong></th>
                            <th><strong>Numero de Cuenta<strong></th>
                            <th><strong>OPCIONES</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($empresas as $empresa)
                            <tr>
                                <td>{{ $empresa->id }}</td>
                                <td>{{ $empresa->NomEmpresa }}
                                <td>{{ $empresa->Banco }}
                                <td>{{ $empresa->Cuenta }}</td>
                                <td>
                                <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-info m-r-5 m-b-5">VER</a>
                                </td>
                                <td>
                                <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-warning m-r-5 m-b-5">EDITAR</a>
                                </td>
                                <td>
                                    <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger m-r-5 m-b-5" >BORRAR</button>
                                    </form>
                                </td>                                     
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $empresas->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection