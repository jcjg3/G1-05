

<div class="form-group">
    {!! Form::Label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('birthdate', 'Fecha de nacimiento') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control']) !!}  
</div>

<div class="form-group">
    {!! Form::Label('disability', 'Minusvalía') !!}
    {!! Form::text('disability', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('phone', 'Telefono') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('address', 'Dirección') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('sexo', 'Sexo') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {{ Form::label('photo', 'INSERTAR IMAGEN') }}
    {{ Form::file('photo', ['class' => 'form-control'])}}
</div>

<div class="col-md-12 text-left"> 
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>

