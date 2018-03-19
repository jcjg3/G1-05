
@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ activity->name}}</title>
</head>
<body>
<h2> {{ activity->name}}</h2>
    <p> {{ activity->description}} </p>
    
</body>
</html>
@endsection