@extends('layout')

@section('content')

<div class="row">
  <div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-file-photo-o"></i>Imagen</div>
      <div class="card-body">
      
      @include('employee.fragment.image')
      
      </div>
    </div>
  </div>

  <div class="col-lg-8">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-bar-chart"></i> Información</div>
      <div class="card-body">
      {{ Form::model($patient, ['route' => ['patient.update', $patient->id], 'method' => 'PUT' ])}}
             @include('patient.fragment.aside')
        {!! Form::close() !!}
       <a type="button" class="btn btn-success btn-sm" href="{{ route('employee.edit', $patient->id)}}" role="button">Editar</a>
      </div>
    </div>
  </div>
</div>

@endsection