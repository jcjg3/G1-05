@extends('layout')
@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('content')
@include('admin.fragment.info')
<div class="row">

<div class="col-lg-8">
    <div class="card mb-3">
    <div class="card-header"><i class="fa fa-table"></i> Lista de Usuarios</div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="row">
                <div class="col-md-11 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Full Calendar Example</div>

                        <div class="panel-body">
                            {!! $calendar->calendar() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="col-lg-4">
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Lista de Usuarios</div>
  <div class="card-body">
    <div class="table-responsive">
    
    <div class="row">
        <div class="col-md-11 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Full Calendar Example</div>

                <div class="panel-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Imagen</th>
              <th>Nombre</th>
              <th></th>
          </tr>
          </thead>

          <tbody>
          @foreach($patients as $patient)
          <tr>
              <td style="text-align:center;"> <img src="{{ $patient->photo }}" style="width:55px;height:55px" class=""> </td>
              <td>{{ $patient->name }}</td>
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
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection 
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@endsection