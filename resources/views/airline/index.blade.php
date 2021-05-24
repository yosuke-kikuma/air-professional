@extends('layouts.app')

@section('content')
    <div class="row row-cols-2">
        @foreach ($airlines as $airline)
           <div class="container">
            <div class="row">
            <div class="col-sm-12">
                <div class="offset-1 col-sm-4">
                    <div class="airline-title">
                        <span class="airline-image">
                            <img src="{{" " . $airline->photo}}"  alt="{{$airline->photo}}">  
                        </span>
                        <div class="airline-name">
                            <p>{{$airline->name}}</p>
                            <p>{{$airline->name_en}}</p>
                        </div>
                    </div>
                </div>
  
                <div class="col-sm-6">
                    <div class="airline-body">
                            <ul class="list-unstyled">
                            @foreach ($airline->microposts()->orderBy('created_at', 'desc')->take(10)->get() as $micropost)
                            <li class="media mb-3">  
                                <div class="media-body">
                                {{$micropost->name}}
                                <span class="text-muted">posted at {{$micropost->created_at}}</span>
                                <p>{!! nl2br(e($micropost->content)) !!}</p>
                            </li>
                            @endforeach
                            </ul>
               
                        {!! Form::model($micropost, ['route' => 'micropost.store']) !!}
　　                    <div class="form-group">
                            {!! Form::label('name', '名前') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', '内容') !!}
                            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                        </div>
　　                        {!! Form::submit('送信', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}   
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        @endforeach
    </div>
    
@endsection