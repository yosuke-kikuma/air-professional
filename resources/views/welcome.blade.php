@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="offset-1 col-sm-10 offset-1">
            <div id="main_visual">
                <img src="images/mainvisual.jpg" alt="main_visual">
            </div>
            <div id="wrappper">
                <div class="main_article_title">
                    <h1>航空業界全体のニュース</h> 
                </div>    
                <h2>最新のニュース一覧（増減便・新規就航/運休・セールス運賃・コロナ情報 等）</h>
                @include('article.index')
                <div class="img-link">
                    <h2>各航空会社の掲示板へ移動（ページをクリック）</h>
                    <a href="{{URL::to('/airline')}}"><img src="images/direction_bar.jpg" alt="main_visual"></a>
    　　          </div>
            </div>
        </div>
   </div>
@endsection
