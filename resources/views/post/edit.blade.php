@extends('app')

@section('content')
    @include('partials._topbar')
    <div class="container">
        <h1>更新post</h1>
        {!! Form::model($post, ['action' => ['PostController@update', $post], 'method' => 'PUT']) !!}
        @include('post._form')
        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection