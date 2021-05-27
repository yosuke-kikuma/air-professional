@if (Auth::check())
@extends('layouts.app')

@section('content')

@if (Auth::id() == $user->id)
<div class="text-center">
        <h1>{{Auth::user()->name}}さんのお気に入り登録一覧</h1>
</div>

@include('article.index')
@endif

@endsection
@endif