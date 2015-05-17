<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description') !!}
    {!! Form::textarea('description', old('description'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image') !!}
    {!! Form::text('image', old('image'), ['class' => 'form-control']) !!}
</div>