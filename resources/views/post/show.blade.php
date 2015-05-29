@extends('app')

@section('title', $post->title)

@section('content')
    @include('partials._topbar')
    <div id="body-main" class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="post-article">
                    <article>
                        <h1 class="post-title">
                            {{ $post->title }}
                        </h1>

                        <div class="meta">
                    <span class="item time">
                        <i class="fa fa-clock-o to-right-15"></i>{{ $post->createdTime() }}
                    </span>
                        </div>

                        <div class="post-content">
                            {!! $post->htmlStory() !!}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection