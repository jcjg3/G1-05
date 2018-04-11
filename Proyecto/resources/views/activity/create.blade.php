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
<h2> Nueva actividad </h2>

{!! Form::open(['route' => 'activity.store']) !!}
     @include('activity.Fragment.form')
{!!Form::close()!!}
</body>
</html>

@endsection('content')