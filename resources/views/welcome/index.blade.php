@extends('app')

@section('content')

    @include('partials._topbar')
    @include('partials._message_bar')
    @include('partials._top_slider')

    <div id="body-main" class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="top-posts" class="widget">
                    <div class="widget-title">
                        最新文章
                    </div>
                    <div class="widget-body">
                        <ul class="post-list with-img">
                            <li class="post">
                                <a href="/">
                                    <img class="img"
                                         src="http://img.ptcms.csdn.net/article/201505/20/555c44796cd52.jpg"/>
                                </a>
                                <div class="content">
                                    <a class="title" href="http://wallstreetcn.com/node/218474" target="_blank">
                                        央视点名上市公司“讲故事” 改名现象
                                    </a>
                                    <div>
                                        <span class="meta author">
                                            文 / <a href="/news?uid=399516" target="_blank">程俊</a>
                                        </span>
                                        <span class="meta time hidden-xxs">2015年05月24日 11:10:51</span>
                                        <span class="meta endorse pull-right">
                                            <i class="fa fa-comment"></i> 14
                                        </span>
                                        <span class="meta endorse pull-right">
                                            <i class="fa fa-thumbs-up"></i> 3
                                        </span>
                                    </div>
                                    <div class="summary hidden-xxs">
                                        <p>
                                            继周五证监会例会宣布重点打击六类操纵市场行为之后，央视周日点名编题材讲故事的上市公司。多伦股份、二三四五、神州高铁、天神娱乐、三泰控股、中科云网、科达洁能、鲁丰环保榜上有名。另外，高价股也受到关注，如长亮科技、全通教育、安硕信息、暴风科技、京天利、贵州茅台。
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                sdfsd
            </div>
        </div>
    </div>
@endsection