<div class="form-group">

    {!! form::label('NomEmpresa', 'Nombre Empresa o Persona:') !!}
    {!! form::text('NomEmpresa', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! form::label('Banco', 'Entidad Financiera:') !!}
    {!! form::text('Banco', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! form::label('Cuenta', 'No. de Cuenta:') !!}
    {!! form::text('Cuenta', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

{!! form::submit('ENVIAR', ['class' => 'btn btn-[primary']) !!}

</div>
