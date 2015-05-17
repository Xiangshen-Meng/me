@extends('app')

@section('content')
    @include('partials._topbar')
    <div class="container">
        <h1>新建team</h1>
        {!! Form::open(['action' => 'TeamController@store']) !!}
        @include('team._form')
        {!! Form::submit('提交', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection