
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
          
             {!! Form::model($patient, ['route' => ['patient.update',$patient->id],'method' =>'PUT']) !!}
                @include('patient.fragment.formulario')
            {!!Form::close()!!}
        </div>
    </div>
</div>
    


  
    
</body>
</html>
@endsection('content')