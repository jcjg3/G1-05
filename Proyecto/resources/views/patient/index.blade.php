@extends('layout')

@section('content')
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-table"></i> Lista de pacientes</div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.fragment.info')

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Imagen</th>
                            <th width="20px">ID</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                            <th>Minusvalía</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Sexo</th>
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
                                <td>{{ $patient->birthdate }}</td>
                                <td>{{ $patient->disability }}</td>
                                <td>{{ $patient->address }}</td>
                                <td>{{ $patient->phone }}</td>
                                <td>{{ $patient->sexo }}</td>
                                <td class="text-center"> <a type="button" class="btn btn-success btn-sm" href="{{ route('patient.show', $patient->id)}}" role="button">Ver</a></td>
                                <td class="text-center"> <a type="button" class="btn btn-success btn-sm" href="{{ route('patient.edit', $patient->id)}}" role="button">Editar</a></td>
                                <td class="text-center">
                                    <form action="{{ route('patient.destroy', $patient->id)}}" method="POST">
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
@endsection