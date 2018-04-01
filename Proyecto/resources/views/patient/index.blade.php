@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pacientes</title>
</head>
<body>
<h1> Pacientes </h1>
<table class =  "table table-hover table-striped">
    <thead> 
    </thead>
    <tbody>
        @foreach($patients as $patient)
        <tr>
            <td>  {{ $patient->id }}  </td>
            <td> <strong> {{ $patient->name }} </strong> </td>
            <td> {{ $patient->disability }} </td>
            <td> 
            <form action="{{route('patient.destroy',$patient->id)}}" method ="POST">
                {{ csrf_field()}}
                <input type="hidden" name= "_method" value="DELETE"> 
                <button> borrar</button>
            </form>
         </td>
        </tr>
        @endforeach
        {!! $patients->render()!!}
    </tbody>
</table> 
</body>
</html>

@endsection('content')