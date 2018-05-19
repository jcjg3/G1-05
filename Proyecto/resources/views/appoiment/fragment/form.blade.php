@section('style')
@endsection
<div class="form-group">
    {!! Form::Label('patient_id', 'Paciente') !!}
    <div class="form-group">
        <select name="patient_id" id="inputPatient_id" class="form-control">
            @foreach($patients as $patient)
                <option value="{{ $patient['id']}}">{{ $patient['name']}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
{!! Form::Label('activity_id', 'Actividad') !!}
    <div class="form-group">
        <select name="activity_id" id="inputActivity_id" class="form-control">
            @foreach($activities as $activity)
                <option value="{{ $activity['id']}}">{{ $activity['name']}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    {!! Form::Label('fecha', 'Fecha') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}  
</div>
<div class="form-group">
    {!! Form::Label('hora', 'Hora') !!}
    <!-- {!! Form::text('hora', null, ['class' => 'form-control']) !!} -->
    {{ Form::select('hora', $times) }}
    
</div>

<div class="col-md-12 text-left"> 
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
</div>