

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
    {!! Form::text('birthdate', null, ['class' => 'form-control']) !!}
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
    {{ Form::label('photo', 'INSERTAR IMAGEN') }}
    {{ Form::file('photo', ['class' => 'form-control'])}}
</div>
<div class ="form-group">
    <label for="">Actividades </lavel>
    <select name="activity_id" id="inputActivity" class="form-control">
        @foreach ($acty as $act){
            <option value={{ $act['id'] }} > {{ $act['name']}} </option>
        }
        @endforeach
    </select>
</div>

<div class="col-md-12 text-left"> 
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>



