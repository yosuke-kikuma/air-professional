@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>お問い合わせ</h1>
    </div>

    <div class="form row">
        <div class="col-sm-6 offset-sm-3">

    {!! Form::model($contact, ['route' => 'contacts.post']) !!}
　　    <div class="form-group">
            {!! Form::label('name', '名前') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'メールアドレス') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('number', '電話番号') !!}
            {!! Form::text('number', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', '内容') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>
　　        {!! Form::submit('送信', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
    {!! Form::close() !!}

    </div>
</div>
 
@endsection
