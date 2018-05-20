
@extends('layout')

@section('content')

<div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('patient.show', $patient->id)}}">Datos personal</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ route('expedient.show', $patient->id)}}">Historial</a>
        </li>
    </ol>

    <div class="col-lg-3" style="float:left">
        <div class="card mb-1">
            <div class="card-header"><i class="fa fa-bar-chart"></i>Foto</div>
                <div class="card-body">
                 @include('patient.fragment.image')             
                </div>
        </div>
    </div>

    <div class="col-lg-12">
            <div class="card mb-3">
                <div class="card-header">
                <i class="fa fa-wheelchair"></i> </div>
                <div class="card-body">
                    <div class="card mb-1">
                            {{ Form::model($patient, ['route' => ['patient.update', $patient->id], 'method' => 'PUT' ])}}
                                @include('patient.fragment.aside')
                            {!! Form::close() !!}
                            <pre> </pre>
                            <pre>         <a type="button" class="btn btn-success btn-sm" href="{{ route('patient.edit', $patient->id)}}" role="button">Editar</a> </pre>
                    </div>
                   
                </div>
            </div> 
        
    </div>   
 
</div>
 
@endsection('content')
