@extends('app')

@section('content')

    @include('partials._topbar')
    @include('partials._message_bar')

    <div id="body-main" class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div id="top-posts" class="widget">
                    <div class="widget-title">
                        最新文章
                    </div>
                    <div class="widget-body">
                        <ul class="post-list with-img">
                            @forelse($posts as $post)
                                <li class="post">
                                    <a href="/">
                                        <img class="img"
                                             src="{{ $post->image }}"/>
                                    </a>
                                    <div class="content">
                                        <a class="title" href="{{ route('post.show', $post) }}" target="_blank">
                                            {{ $post->title }}
                                        </a>
                                        <div>
                                            <span class="meta time hidden-xxs">
                                                {{ $post->createdTime() }}
                                            </span>
                                        </div>
                                        <div class="summary hidden-xxs">
                                            <p>
                                                {{ $post->description }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <p>No Posts</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection