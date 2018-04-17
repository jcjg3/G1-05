<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paciente</title>
</head>
<body>
    
<div class="col-lg-4">
    <div class="card mb-3">
      <div class="card-header"><i class="fa fa-info-circle"></i>{{$patient->name }}</div>
      <div class="card-body">
       {{$patient->disability}}
      </div>
    </div>
  </div>


  
    
</body>
</html>