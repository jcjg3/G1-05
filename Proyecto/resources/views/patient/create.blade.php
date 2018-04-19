@extends('layout')

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-header"><i class="fa fa-file-photo-o"></i>Imagen</div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="" id="profile-img-tag" class="img-thumbnail" />
                    </div>

                    <div class="col-md-12 text-center">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-header"><i class="fa fa-bar-chart"></i> Información</div>
                <div class="card-body">
                    @include('patient.fragment.error')

                    {{ Form::open(['route' => 'patient.store', 'method' => 'post', 'files' => true])}}
                    @include('patient.fragment.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript">
        $('#profile-img-tag').attr('src', '../images/nophoto.png');
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#profile-img-tag').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#photo").change(function(){
            readURL(this);
        });
    </script>
@endsection