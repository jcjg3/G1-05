@extends('layout')

@section('content')
<div class="card mb-3">
<div class="card-header">
  <i class="fa fa-table"></i> Relación de Empleados</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Fecha de Nacimiento</th>
            <th>Contrato</th>
            <th>Teléfono</th>
            <th>Ver</th>
            <th>Modificar</th>
            <th>Eliminar</th>

        </tr>
        </thead>

        <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->birthdate }}</td>
            <td>{{ $employee->contract }}</td>
            <td>{{ $employee->phone }}</td>
            <td><a class="btn btn-default" href="#" role="button">Link</a></td>
            <td>modificar</td>
            <td>eliminar</td>
        </tr>
        @endforeach
        
        </tbody>
    </table>
    </tbody>
    </table>
  </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection