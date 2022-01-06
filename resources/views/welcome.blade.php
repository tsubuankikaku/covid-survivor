@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>コロナサバイバーのたまりば</h1>
        </div>
    </div>
    
    <div>
         <div class="col text-center">
             
           <button type="button" class="btn btn-info">体験談</button>
           <button type="button" class="btn btn-info">アンケート</button>
           <button type="button" class="btn btn-info">アンケート結果</button>
           </div>
    </div>
    {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
@endsection