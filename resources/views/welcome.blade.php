@extends('layouts.app')

 @section('content')
 
 @if (Auth::check())
       
  <div class="card text-center">
      <img src="{{$user->image}}" class="rounded-circle">
      
  <div class="card-header">
    {{ Auth::user()->name }}
  </div>
  <div class="card-body">
    <p class="card-title">年齢：{{ Auth::user()->age }}</p>
    <p class="card-title">都道府県：{{ Auth::user()->region }}</p>
    <p class="card-title">メール：{{ Auth::user()->email}}</p>
     </div>
   <div class="col text-center">
    　　　<button type="button" class="btn btn-info">体験談投稿</button>
           <button type="button" class="btn btn-info">アンケート</button>
 　　</div>
  
</div>
           
    @else
        

    <div class="center jumbotron bg-white">
        <div class="text-center">
            <h1>コロナサバイバーのたまりば</h1>
            <br>
            <h5>コロナを乗り越えた皆さんの辛かったこと、<br>今直面していること、伝えたいことをシェアしてください。</h5>
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