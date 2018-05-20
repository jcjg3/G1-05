
@extends('layout')

@section('content')
<div>
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('patient.show',$patient->id)}}">Datos personal</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ route('expedient.show', $patient->id)}}">Historial</a>
            </li>
        </ol>
    <div class="col-lg-11">
        <div class="card mb-1">
            <div class="card-header"><i class="fa fa-address-book-o"></i>Expediente</div>
                <div class="card-body">
                    @include('expedient.fragment.mostrar')
                </div>
            </div>
        </div>
    </div>
   <pre> </pre> 
    <div class = "row">
        <div class="col-lg-7">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Gráfico</div>
            <div class="card-body">
            <canvas id="myBarChart" width="100" height="50"></canvas>
              
            </div>
            
          </div>
        </div>
        <div class="col-lg-4">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-youtube-play"></i>Grabaciones</div>

            <div class="card-body">
              <iframe width="470" height="315" src="https://www.youtube.com/embed/HIoZRgmVUZk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            
          </div>
</div>
</div>
 
@endsection('content')