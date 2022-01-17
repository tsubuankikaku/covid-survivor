@extends('layouts.app')

@section('content')

　　
　　<div class="text-center">
    <h1>{{ $user->name}} のプロフィール編集</h1>
    </div>

    　<div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}

               {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'ニックネーム') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('age', '年齢') !!}
                    {!! Form::text('age', null, ['class' => 'form-control']) !!}
                </div>
                
                
        
            <div class="form-group">
                <label for="inputFile">プロフィール画像</label>
                <input type="file" class="form-control-file" id="inputFile">
            </div>
             
                               
                
                <div class="form-group">
                    {!! Form::label('region', '都道府県') !!}
                    {!! Form::text('region', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Eメール') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワードの確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-info btn-block']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection