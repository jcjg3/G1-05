@extends('layout')

@section('content')

<div class="row">
  <div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-file-photo-o"></i>Imagen</div>
      <div class="card-body">
      <div class="text-center"> 

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

        @include('admin.fragment.error')

        {{ Form::open(['route' => 'admin.store', 'method' => 'post', 'files' => true])}}
          @include('admin.fragment.form')
          
        {!! Form::close() !!}

        </div>
        </div>
      </div>
      
</div>

@endsection