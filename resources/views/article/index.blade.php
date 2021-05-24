<ul class="article-body">
    @if (count($articles) > 0)
        @foreach ($articles as $article)
        <div class="article-list d-flex flex-row">
　      {{$article->content}}
　      @include('user_favorite.favorite_button')
　      </div>
　      @endforeach 
　      {{$articles->links()}}
　  @endif
</ul>