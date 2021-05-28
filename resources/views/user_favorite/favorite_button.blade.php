@if (Auth::check())
　  @if (Auth::user()->is_favorite($article->id))
        {!! Form::open(['route' => ['favorites.unfavorite', $article->id], 'method' => 'delete']) !!}
        {!! Form::submit('お気に入り解除', ['class' => "btn btn-danger btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite', $article->id]]) !!}
        {!! Form::submit('お気に入り登録', ['class' => "btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif