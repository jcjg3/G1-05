@extends('layout')

@section('content')
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-header"><i class="fa fa-table"></i> Lista de grabaciones</div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('admin.fragment.info')


                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th width="20px">ID</th>
                            <th>Discapacidad</th>
                            <th>Comentario</th>
                            <th>Ruta</th>
                        </tr>

                        </thead>

                        <tbody>
                        @foreach($records as $record)
                            <tr>
                                <td>{{ $record->id }}</td>
                                <td>{{ $record->disability }}</td>
                                <td>{{ $record->commentary }}</td>
                                <td>{{ $record->path }}</td>


                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection