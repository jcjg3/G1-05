
@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paciente</title>
</head>
<body>
    
<div class="col-lg-10">
    <div class="card mb-10">
      <div class="card-header"> <h2> {{$patient->name }} </h2></div>
      <div class="card-body"> 
      <div class="col-lg-15">
      <div class="card mb-10">
        <div class="card-body">

        <div align = "right" class = "col-lg-20">
          <img src="{{ $patient->photo }}"class="img-fluid" alt="..." align="right"> </img>
        </div>

        <div align = "left">
          <h3> Fecha de nacimiento: {{$patient->birthdate}} </h3>
          <h3> sexo: {{$patient->sexo}} </h3>
          <h3> Discapacidad: {{$patient->disability}} </h3>
          <h3> Telefono: {{$patient->phone}} </h3>
          <h3> Direccion: {{$patient->address}} </h3>
        </div>
      </div>
      </div>
      </div>      
      </div>
    </div>
  </div>


  
    
</body>
</html>
@endsection('content')