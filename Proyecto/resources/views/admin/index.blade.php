@extends('layout')

@section('content')

<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th></th>
              
          </tr>
          </thead>

          <tbody>
          @foreach($employees as $employee)
          <tr>
              <td>{{ $employee->id }}</td>
              <td>{{ $employee->name }}</td>
              <td>{{ $employee->email }}</td>
              <td><a type="button" class="btn btn-success btn-sm" href="{{ route('admin.show', $employee->id)}}" role="button">Ver     </a>
              <a type="button" class="btn btn-success btn-sm" href="{{ route('admin.show', $employee->id)}}" role="button">Modificar</a>
              <a type="button" class="btn btn-success btn-sm" href="{{ route('admin.show', $employee->id)}}" role="button">Eliminar</a></td>
          </tr>
          @endforeach
          
          </tbody>
        </table>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection