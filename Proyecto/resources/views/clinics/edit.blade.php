@extends('layout')

@section('content')



 <div class="col-lg-10">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-bar-chart"></i> Información</div>
        <div class="card-body">
        {{ Form::model($clinic, ['route' => ['clinics.update', $clinic->id], 'method' => 'PUT', 'files' => true])}}
             @include('clinics.fragment.form')
        {!! Form::close() !!}
        </div>
        </div>
      </div>
      </div>
</div>

@endsection
