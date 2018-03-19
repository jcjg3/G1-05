<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividades</title>
</head>
<body>
<h1> Actividades </h1>
<table class =  "table table-hover table-striped">
    <thead> 
    </thead>
    <tbody>
        @foreach($activities as $activity)
        <tr>
            <td>  {{ $activity->id }}  </td>
            <td> <strong> {{ $activity->name }} </strong> </td>
            <td> {{ $activity->description }} </td>
            <td> 
            <form action="{{route('activity.destroy',$activity->id)}}" method ="POST">
                {{ csrf_field()}}
                <input type="hidden" name= "_method" value="DELETE"> 
                <button> borrar</button>
            </form>
         </td>
        </tr>
        @endforeach
        {!! $activities->render()!!}
    </tbody>
</table> 
</body>
</html>