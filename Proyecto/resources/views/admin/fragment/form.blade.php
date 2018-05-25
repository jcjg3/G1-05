

<div class="form-group">
    {!! Form::Label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('birthdate', 'Fecha de nacimiento') !!}
    {!! Form::date('birthdate', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('contract', 'Contrato') !!}
    {!! Form::text('contract', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('phone', 'Telefono') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>



<div class="form-group">
{!! Form::Label('clinic_id', 'Clinica') !!}
    <div class="form-group">
        <select name="clinic_id" id="inputActivity_id" class="form-control">
            @foreach($clinics as $clinic)
                <option value="{{ $clinic['id']}}">{{ $clinic['name']}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    {!! Form::Label('password', 'Clave') !!}
    {!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {{ Form::label('photo', 'INSERTAR IMAGEN') }}
    {{ Form::file('photo', ['class' => 'form-control'])}}
</div>

<div class="col-md-12 text-left"> 
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>

