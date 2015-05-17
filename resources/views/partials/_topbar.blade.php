<nav class="navbar navbar-default" id="topbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topbar-content">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                日兮网
            </a>
        </div>

        <div class="collapse navbar-collapse" id="topbar-content">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}">
                        <span>日兮首页</span>
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/auth/login') }}">登录</a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">退出登录</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>