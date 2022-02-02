@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>アンケート</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::model($survey,['route' => ['surveys.store']]) !!}
                <div class="form-group">
                    {!! Form::label('job', '職業') !!}
                    {{Form::select('job', ['サービス業', '医療関係者', '公務員','無職','主婦','学生','自営業','教育関連'])}}
                </div>
                
                <div class="form-group">
                    {!! Form::label('route', '感染経路') !!}
                    {{Form::select('route', ['職場', '家庭内', '不明','会食'])}}
                </div>
             
                               
                <div class="form-group">
                    {!! Form::label('symptom', '主な症状') !!}
                    {{Form::select('symptom', ['無症状','咳', '発熱', '息切れ','肺炎','胃腸症状','味覚嗅覚障害','風邪のような症状','全て','その他'])}}
                </div>

                <div class="form-group">
                    {!! Form::label('level', '症状の重さ') !!}
                    {{Form::select('level', ['軽症', '中等症', '重症'])}}
                </div>
                
                <div class="form-group">
                    {!! Form::label('duration', '罹患期間') !!}
                    {{Form::select('duration', ['2週間以内', '1ヶ月以内', '２ヶ月以内','3ヶ月以上','闘病中'])}}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('after_effect', '後遺症の有無') !!}
                    {{Form::select('after_effect', ['有り','無し'])}}
                </div>

 　　　　　　　　　　　<div class="form-group">
                    {!! Form::label('symptom_after', '後遺症の内容') !!}
                    {{Form::select('symptom_after', ['味覚嗅覚障害', '息切れ', '疲労感','全て','その他'])}}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('reaction', '周りの人の反応') !!}
                    {!! Form::text('reaction', null, ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('anything', 'その他何でも伝えたいこと') !!}
                    {!! Form::text('anything', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('回答を送信', ['class' => 'btn btn-info btn-block']) !!}
            {!! Form::close() !!}
           
            
        </div>
    </div>
           
    
    @endsection