@extends('app')

@section('content')
    @include('partials._topbar')
    <div class="container">
        <h1>新建post</h1>
        {!! Form::open(['action' => 'PostController@store']) !!}
        @include('post._form')
        {!! Form::submit('提交', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection