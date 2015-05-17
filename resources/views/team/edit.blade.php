@extends('app')

@section('content')
    @include('partials._topbar')
    <div class="container">
        <h1>编辑team</h1>
        {!! Form::model($team, ['action' => ['TeamController@update', $team], 'method' => 'PUT']) !!}
        @include('team._form')
        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
@endsection