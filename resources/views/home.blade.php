@extends('app')

@section('content')
    @include('partials._topbar')
    <div class="container">
        <div class="row">
            @if (\Auth::user()->admin)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">管理界面</div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td><a href="{{ route('post.create') }}" class="btn btn-primary">新建Post</a></td>
                                </tr>
                                <tr>
                                    <td><a href="{{ route('team.create') }}" class="btn btn-primary">新建Team</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
