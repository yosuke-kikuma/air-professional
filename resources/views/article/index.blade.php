<ul class="main-article_body">
    @if (count($articles) > 0)
        @foreach ($articles as $article)
        <div class="main-article_list d-flex flex-row">
　      {{$article->content}}
　      @include('user_favorite.favorite_button')
　      </div>
　      @endforeach 
　      {{$articles->links()}}
　  @endif
</ul>