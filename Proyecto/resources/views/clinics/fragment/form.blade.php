

<div class="form-group">
    {!! Form::Label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('direccion', 'Direccion') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('localidad', 'Localidad') !!}
    {!! Form::text('localidad', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('provincia', 'Provincia') !!}
    {!! Form::text('provincia', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('phone', 'Telefono') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-12 text-left"> 
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>

