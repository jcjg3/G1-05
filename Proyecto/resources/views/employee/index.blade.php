@extends('layout')

@section('content')
<div class="col-lg-12">
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Lista de Pacientes</div>
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
          @foreach($patients as $patient)
          <tr>
              <td style="text-align:center;"> <img src="{{ $patient->photo }}" style="width:55px;height:55px" class=""> </td>
              <td>{{ $patient->id }}</td>
              <td>{{ $patient->name }}</td>
              <td>{{ $patient->email }}</td>
              <td class="text-center">  <a type="button" class="btn btn-success btn-sm" href="{{ route('employee.show', $patient->id)}}" role="button">Ver</a></td>
              <td class="text-center"> <a type="button" class="btn btn-success btn-sm" href="{{ route('employee.edit', $patient->id)}}" role="button">Editar</a></td>
              <td class="text-center">
              <form action="{{ route('employee.destroy', $patient->id)}}" method="POST">
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