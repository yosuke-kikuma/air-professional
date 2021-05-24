<header>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="head-left">
        <p>日系の航空業界専門サイト</p>
            <div class="foot-left">
            <a class="navbar-brand" href="/">AIR Professional</a>
            </div>
        </div>

        <div class="nav-right collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
            @if (Auth::check())
                <li class="nav-item">{!! link_to_route('users.favorites', 'お気に入り', ['id' => Auth::id()]) !!}</li>
                <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
            @else
                <li class="nav-item">{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
            @endif
            </ul>
        </div>
    </nav>
</header>
