@extends('layout')

@section('contenido')
  
    <div class="col-sm-8">
       <h2>
            Lista de Cuentas de Empresas y Personas
                <a href="{{ route('empresas.create') }}" class="btn btn-primary pull-right">Agregar nueva Empresa</a>
       </h2>   
            
       @include('products.fragment.info')
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th width="20px">ID</th>
                            
                            <th>Nombre Empresa o Persona</th>
                            <th>Entidad Financiera</th>
                            <th>Numero de Cuenta</th>
                           
                            <th colspan="3">&nbsp;</th>
                            
                        </tr>

                    </thead>
                    <tbody>
                    @foreach($empresas as $empresa)
                            <tr>
                                <td><strong>{{ $empresa->id }}</strong></td>
                              
                                <td><strong>{{ $empresa->NomEmpresa }}</strong>
                                <td><strong>{{ $empresa->Banco }}</strong>
                                <td><strong>{{ $empresa->Cuenta }}</strong></td>
                                
                                <td>
                                <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-link">VER</a>
                                </td>
                                <td>
                                <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-link">EDITAR</a>
                                </td>
                                <td>
                                    <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-link" >BORRAR</button>
                                    </form>
                                </td>                                     
                                
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $empresas->render() !!}
    </div>
    <div class="col-sm-6">
        @include('products.fragment.aside')
    </div>
@endsection