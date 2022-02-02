@extends('layouts.app')

@section('content')
　　<div class="text-center">
    <h3>体験談投稿</h3>
    

    <div class="row">
        <div class="col-sm">
            {!! Form::model($experience, ['route' => 'experiences.store']) !!}

                <div class="form-group">
                   
                    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('投稿', ['class' => 'btn btn-info btn-block']) !!}

            {!! Form::close() !!}
            
              
        </div>
    </div>
    </div>
 
@endsection