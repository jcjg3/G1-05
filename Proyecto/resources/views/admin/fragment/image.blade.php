<div class="text-center"> 
    <!-- <img src="{{ $employee->photo }}"class="img-fluid" alt="..."> -->
    {!! Form::image('photo', ['class' => 'img-fluid']) !!}
</div>
<canvas id="myBarChart" width="100" height="50"></canvas>
<div class="col-md-12 text-center"> 
    {!! Form::submit('Añadir', ['class' => 'btn btn-primary']) !!}
 <!-- <button type="submit" class="btn btn-primary">Añadir imagen</button>-->
</div>