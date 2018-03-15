@extends('layout')

@section('content')
{{ Form::model($employee, ['route' => ['admin.update', $employee->id], 'method' => 'PUT' ])}}
<div class="row">
  <div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-file-photo-o"></i>Imagen</div>
      <div class="card-body">
      @include('admin.fragment.image')
      </div>
    </div>
  </div>

  <div class="col-lg-8">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-bar-chart"></i> Información</div>
        <div class="card-body">
        
          @include('admin.fragment.form')
        
        </div>
        </div>
      </div>
      
</div>
{!! Form::close() !!}
@endsection