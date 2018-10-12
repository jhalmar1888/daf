<div class="form-group">

    {!! form::label('Ordenpago', 'No. orden pago:') !!}
    {!! form::text('Ordenpago', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group ">

    {!! form::label('Cheque', 'No. cheque:') !!}
    {!! form::text('Cheque', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! form::label('Fecha', 'Fecha:') !!}
    {!! form::date('Fecha', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! form::label('Objeto', 'Objeto:') !!}
    {!! form::text('Objeto', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! form::label('Detalle', 'Detalle:') !!}
    {!! form::text('Detalle', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! form::label('DocRespaldo', 'Doc. respaldo:') !!}
    {!! form::text('DocRespaldo', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">

    {!! form::label('MontoNumero', 'Monto:') !!}
    {!! form::text('MontoNumero', null, ['class' => 'form-control']) !!}

</div>


<div class="form-group">

    {!! form::label('NomEmpresa', 'Nombre Cheque de la Empresa:') !!}
    {!! form::select('NomEmpresa', $empresas, null, ['class' => ' select2 form-control']) !!}

</div>

<div class="form-group">

{!! form::label('Cuenta', 'No cuenta:') !!}
{!! form::select('Cuenta', $cuenta, null, ['class' => ' select2 form-control']) !!}

</div>

<div class="form-group">

    {!! form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}

</div>



 