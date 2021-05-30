@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>みんなの掲示板</h1>
    </div>
    <div class="row">
        <div class="offset-4 col-sm-4">
            <div class="main_airline_title text-center">
                <span class="main_airline_image">
                    <img src="{{" " . $airline->photo}}"  alt="{{$airline->photo}}">  
                </span>
                <div class="main_airline_name">
                    <p>{{$airline->name}}</p>
                    <p>{{$airline->name_en}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-2 col-sm-8">
            <div class="main_airline_body">
                @foreach ($airline->microposts()->orderBy('created_at', 'desc')->take(10)->get() as $micropost)
                <div class="mb-2">
                    {{$micropost->name}}
                    <span>投稿日時{{$micropost->created_at}}</span>
                </div>
                <div class="mb-5">
                    {!! nl2br(e($micropost->content)) !!}
                </div>
                @endforeach
                {{$microposts->links() }}
                {!! Form::open(['route' => ['micropost.store',$airline->id]]) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', '内容') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>
　　            {!! Form::submit('投稿', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                {!! Form::close() !!}   
            </div>
        </div>
    </div>    
@endsection