<div class="text-center"> 

<img src="{{ $employee->photo }}"class="img-fluid" alt="..."> 
   
</div>
<canvas id="myBarChart" width="100" height="50"></canvas>
<div class="col-md-12 text-center"> 
{{Form::file('input_img')}}
    {!! Form::submit('Cambiar', ['class' => 'btn btn-primary']) !!}
</div>