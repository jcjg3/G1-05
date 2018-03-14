@extends('layout')

@section('content')
<div class="row">
<div class="col-lg-4">
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-bar-chart"></i> Bar Chart Example</div>
    <div class="card-body">
      <div class="text-center"> <img src="../images/e1.jpeg"class="img-fluid" alt="..."> </div>
      <canvas id="myBarChart" width="100" height="50"></canvas>
    </div>
  </div>
</div>


    <div class="col-lg-8">
      <!-- Example Bar Chart Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
        <div class="card-body">
        <form>
              <div class="form-group">
                <label for="inputAddress">Nombre</label>
                <input type="text" class="form-control" id="inputAddress" value="{{ $employee->name }}">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Email</label>
                <input type="text" class="form-control" id="inputAddress2" value="{{ $employee->email }}">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Fecha de Nacimiento</label>
                <input type="text" class="form-control" id="inputAddress2" value="{{ $employee->birthdate }}">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Contrato</label>
                <input type="text" class="form-control" id="inputAddress2" value="{{ $employee->contract }}">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Telefono</label>
                <input type="text" class="form-control" id="inputAddress2" value="{{ $employee->phone }}">
              </div>
          
              <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
          <canvas id="myBarChart" width="100" height="50"></canvas>
        </div>
      </div>
    </div>
    
  
</div>


@endsection