@extends('layout')

@section('content')
<div class="row">
  <div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-file-photo-o"></i>Imagen</div>
      <div class="card-body">

      </div>
    </div>
  </div>


  <div class="col-lg-8">
    <!-- Example Bar Chart Card-->
    <div class="card mb-3"><i class="fa fa-bar-chart"></i> Información</div>
      <div class="card-body">
        {{ Form::model($employee, ['route' => ['admin.update', $product->id], 'method' => 'PUT' ])}}
          @include('admin.fragment.form')
        {!! Form::close() !!}
        <canvas id="myBarChart" width="100" height="50"></canvas>
      </div>
    </div>
  </div>
</div>

@endsection