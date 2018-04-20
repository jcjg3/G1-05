@extends('layout')

@section('content')
<div class="col-lg-12">
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Lista de Usuarios</div>
  <div class="card-body">
    <div class="table-responsive">
    @include('admin.fragment.info')
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>ID Empleado</th>
              <th>ID Paciente</th>
              <th>Fecha</th>
          </tr>
          </thead>

          <tbody>
          @foreach($patients as $patient)
          <tr>
              <td>{{ $patient->pivot->employee_id }}</td>
              <td>{{ $patient->pivot->patient_id }}</td>
              <td>{{ $patient->pivot->fecha }}</td>
              
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