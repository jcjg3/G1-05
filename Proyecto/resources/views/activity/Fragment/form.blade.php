<div class="form-group">
    {!! Form::Label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label( 'description', 'Descripcion') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::Label( 'votes', 'Votos') !!}
    {!! Form::text('votes', null, ['class' => 'form-control']) !!}
</div>


<div class="col-md-12 text-left"> 
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>

