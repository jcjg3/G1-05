@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividades</title>
</head>
<body>
<div class="col-lg-8">
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Lista de Actividades
      <a class="btn btn-success pull-right" href="{{ route('activity.create')}}" role="button">Nuevo</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              
              <th>ID</th>
              <th>Nombre</th>
              <th></th>
              <th></th>
              <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($activities as $activity)
          <tr>
              <td>{{ $activity->id }}</td>
              <td>{{ $activity->name }}</td>
              <td class="text-center">  <a type="button" class="btn btn-success btn-sm" href="{{ route('activity.show', $activity->id)}}" role="button">Ver</a></td>
              <td class="text-center"> <a type="button" class="btn btn-success btn-sm" href="{{ route('activity.edit', $activity->id)}}" role="button">Editar</a></td>
              <td class="text-center">
              <form action="{{ route('activity.destroy', $activity->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-success btn-sm">Eliminar</button>
              </form>
             </td>
          </tr>
          @endforeach
          
          </tbody>
        </table>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</body>
</html>

@endsection('content')