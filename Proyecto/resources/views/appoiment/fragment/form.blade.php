<div class="form-group">
    {!! Form::Label('patient_id', 'ID Paciente') !!}
    {!! Form::text('patient_id',null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::Label('activity_id', 'Actividad') !!}
    {!! Form::text('activity_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label('fecha', 'Fecha') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('hora', 'Hora') !!}
    {!! Form::text('hora', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-12 text-left"> 
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>

