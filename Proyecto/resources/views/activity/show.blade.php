
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
      <div class="card-header"><i class="fa fa-info-circle"></i>{{$activity->name }}</div>
      <div class="card-body">
       {{$activity->description}}
       <div align = "right">
         <td class="text-right"> <a type="button" class="btn btn-success btn-sm" href="{{ route('activity.edit', $activity->id)}}" role="button">Editar</a></td>
      </div>
      </div>
    </div>
  </div>

</body>
</html>

@endsection('content')