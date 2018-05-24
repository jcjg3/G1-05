
@extends('layout')

@section('content')
<div>
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('patient.show',$expedient->id)}}">Datos personal</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ route('expedient.show', $expedient->id)}}">Historial</a>
            </li>
        </ol>
    <div class="col-lg-11">
        <div class="card mb-1">
            <div class="card-header"><i class="fa fa-address-book-o"></i>Expediente
            <a type="button" class="btn btn-success btn-sm" href="{{ route('expedient.edit', $expedient->id)}}" role="button" style = "float:right">Añadir</a> </div>
                <div class="card-body">
                    @foreach($diagnosis as $diag)
                        <p>{{ $diag->comentario }}</p>



                    @endforeach
                </div>
            </div>
        </div>
    </div>
   <pre> </pre> 
    <div class = "row">
        <div class="col-lg-7">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Gráfico</div>
            <div class="card-body">
                     <img src="../images/canvas.png"  width="900" height="315"></img>         
            </div>
            
          </div>
        </div>
        <div class="col-lg-4">

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