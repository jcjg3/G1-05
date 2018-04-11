<div class="form-group">
    {!! Form::Label('name', 'nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label( 'description', 'descripcion') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label( 'votes', 'votes') !!}
    {!! Form::text('votes', null, ['class' => 'form-control']) !!}
</div>


<div class="col-md-12 text-left"> 
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

