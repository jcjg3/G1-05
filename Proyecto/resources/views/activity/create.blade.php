@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>actividad </title>
</head>
<body>
<div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header">Editar actividad</div>
      <div class="card-body">

            {!! Form::open(['route' => 'activity.store']) !!}
                @include('activity.Fragment.form')
            {!!Form::close()!!}
         </div>
        </div>
    </div>
</div>
</body>
</html>

@endsection('content')