<div class="form-group">
    {!! Form::label('name') !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slogan') !!}
    {!! Form::text('slogan', old('slogan'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('url') !!}
    {!! Form::text('url', old('url'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('image') !!}
    {!! Form::text('image', old('image'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description') !!}
    {!! Form::textarea('description', old('description'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('content') !!}
    {!! Form::textarea('content', old('content'), ['class' => 'form-control']) !!}
</div>