@extends('layout')

@section('content')
<div class="col-lg-8">
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Lista de clinicas</div>
  <div class="card-body">
    <div class="table-responsive">
    @include('admin.fragment.info')
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th width="20px">ID</th>
              <th>Nombre</th>
              <th>Direccion</th>
              <th>Telefono</th>
              <th>Email</th>
          </tr>
          
          </thead>

          <tbody>
          @foreach($clinics as $clinic)
          <tr>
              <td>{{ $clinic->id }}</td>
              <td>{{ $clinic->name }}</td>
              <td>{{ $clinic->direccion }}</td>

              <td>{{ $clinic->phone }}</td>
              <td>{{ $clinic->email }}</td>
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