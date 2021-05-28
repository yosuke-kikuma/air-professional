<ul class="main-article_body">
    @if(count($articles) > 0)
        @foreach($articles as $article)
            <div class="main-article_list d-flex flex-row">
                <a href="{{$article->content}}">{{$article->content}}</a>
                @include('user_favorite.favorite_button')
            </div>
        @endforeach
        {{$articles->links()}}
    @endif
</ul>
    