@extends('layouts.app')

@section('content')
    <div class="text-center">
    <h1>みんなの掲示板</h1>
    </div>
    <div class="row row-cols-2">
        @foreach ($airlines as $airline)
            <div class="col-sm-6">
                <div class="main_airline_title">
                    <span class="main_airline_image">
                        <img src="{{" " . $airline->photo}}"  alt="{{$airline->photo}}">  
                    </span>
                    <div class="main_airline_name">
                        <p>{{$airline->name}}</p>
                        <p>{{$airline->name_en}}</p>
                    </div>
                </div>
          
                <div class="main_airline_body">
                    <ul class="list-unstyled mr-2">
                    @foreach ($airline->microposts()->orderBy('created_at', 'desc')->take(10)->get() as $micropost)
                    <li class="media mb-3">  
                        <div class="mr-2">
                        {{$micropost->name}}
                        </div>
                        <p>投稿日時 {{$micropost->created_at}}<br>
                        {!! nl2br(e($micropost->content)) !!}</p>
                    </li>
                    @endforeach
                    </ul>
                    
                    {!! Form::open(['route' => 'micropost.store']) !!}
                    {!! Form::hidden('airline_id', $airline->id) !!}
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
        @endforeach
    </div>
@endsection