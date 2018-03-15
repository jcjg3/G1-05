@extends('layout')

@section('content')
{{ Form::open(['route' => 'admin.store' ])}}
<div class="row">
  <div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-file-photo-o"></i>Imagen</div>
      <div class="card-body">
      <div class="text-center"> 

        {{Form::label('No hay imagen', 'input_img',['class' => 'img-fluid'])}}
        {{Form::file('input_img')}}
        
        </div>
        <canvas id="myBarChart" width="100" height="50"></canvas>
        <div class="col-md-12 text-center"> 
</div>
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