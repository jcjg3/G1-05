@extends('layout')

@section('content')
<div class="col-lg-8">
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Lista de Usuarios</div>
  <div class="card-body">
    <div class="table-responsive">
    @include('admin.fragment.info')
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Imagen</th>
              <th>ID</th>
              <th>Nombre</th>
              <th>Correo</th>
              
              <th></th>
              <th></th>
              <th></th>
          </tr>
          </thead>

          <tbody>
          @foreach($employees as $employee)
          <tr>
              <td style="text-align:center;"> <img src="{{ $employee->photo }}" style="width:55px;height:55px" class=""> </td>
              <td>{{ $employee->id }}</td>
              <td>{{ $employee->name }}</td>
              <td>{{ $employee->email }}</td>
              <td class="text-center">  <a type="button" class="btn btn-success btn-sm" href="{{ route('admin.show', $employee->id)}}" role="button">Ver</a></td>
              <td class="text-center"> <a type="button" class="btn btn-success btn-sm" href="{{ route('admin.edit', $employee->id)}}" role="button">Editar</a></td>
              <td class="text-center">
              <form action="{{ route('admin.destroy', $employee->id)}}" method="POST">
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
@endsection