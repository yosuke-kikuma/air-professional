@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="offset-1 col-sm-10 offset-1">
            <div id="main_visual">
                <img src="images/mainvisual.jpg" alt="main_visual">
            </div>
            <div id="wrappper">
                <div class="main_article_title">
                    <h1>航空業界全体のニュース</h1> 
                </div>  
                <h2>最新のニュース一覧（増減便・新規就航/運休・セールス運賃・コロナ情報 等）</h2>
                    @include('article.index')
                <div class="mb-5">
                    <h2>各航空会社の掲示板へ移動（画像をクリック）</h2>
                </div>
                <div class="img-link">
                    <a href="{{URL::to('/airline', [$airlines[0]->id])}}/micropost"><img src="images/ana_logo.jpg" alt="全日空"></a> 
                    <a href="{{URL::to('/airline', [$airlines[1]->id])}}/micropost"><img src="images/jal_logo.jpg" alt="日本航空"></a>
                    <a href="{{URL::to('/airline', [$airlines[2]->id])}}/micropost"><img src="images/skymark_logo.jpg" alt="ジェットスター"></a>
                    <a href="{{URL::to('/airline', [$airlines[3]->id])}}/micropost"><img src="images/jetstar_logo.jpg" alt="スカイマーク"></a>
                    <a href="{{URL::to('/airline', [$airlines[4]->id])}}/micropost"><img src="images/starflyer_logo.jpg" alt="スターフライヤー"></a> 
                    <a href="{{URL::to('/airline', [$airlines[5]->id])}}/micropost"><img src="images/solaseedair_logo.jpg" alt="ソラシドエア"></a>
                    <a href="{{URL::to('/airline', [$airlines[6]->id])}}/micropost"><img src="images/peach_logo.jpg" alt="ピーチ"></a>
                    <a href="{{URL::to('/airline', [$airlines[7]->id])}}/micropost"><img src="images/airdo_logo.jpg" alt="エア・ドゥ"></a>
                </div>
            </div>
        </div>
    </div>
@endsection
