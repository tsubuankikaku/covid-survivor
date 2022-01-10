@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>コロナサバイバーのつぶやき</h1>
            <br>
            <h5>コロナを乗り越えた皆さんの辛かったこと、<br>今直面していること、伝えたいことをシェアしてください。</h5>
        </div>
        
       
             <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                @include('microposts.form')
                {{-- 投稿一覧 --}}
                @include('microposts.microposts')
            </div>
                
      
    </div>
    
    <div>
         <div class="col text-center">
             
           <button type="button" class="btn btn-info">体験談</button>
           <button type="button" class="btn btn-info">アンケート</button>
           <button type="button" class="btn btn-info">アンケート結果</button>
          </div>
          
          
    </div>
 @endif
@endsection