@extends('layout')
@section('style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('content')
<div class="col-lg-6">
<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Lista de Usuarios</div>
  <div class="card-body">
    <div class="table-responsive">
    @include('admin.fragment.info')
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
@endsection 
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@endsection