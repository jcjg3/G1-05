
@extends('layout')

@section('content')
<div class="col-lg-8">
    <div class="card mb-1">
              
        <div class="card-header"><i class="fa fa-bar-chart"></i>Expediente</div>
             <div class="card-body">
                
                    @include('expedient.fragment.mostrar')
             
                
            </div>
        </div>
    </div>
</div>
 
@endsection('content')