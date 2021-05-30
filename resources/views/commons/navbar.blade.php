<header>
    <nav class="navbar navbar-expand-sm bg-light d-flex justify-content-between">
        <div class="navbar_left">
            <p>日系の航空業界専門サイト</p>
        <div class="foot_left">
            <a class="navbar-brand" href="/">AIR Professional</a>
            </div>
        </div>
        
        <div class="navbar_right">
            @if (Auth::check())
                <div class="nav_item">{!! link_to_route('users.favorites', 'お気に入り', ['id' => Auth::id()]) !!}</div>
                <div class="nav_item">{!! link_to_route('logout.get', 'ログアウト') !!}</div>
            @else
                <div class="nav_item">{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</div>
                <div class="nav_item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</div>
            @endif
        </div>
    </nav>
</header>
