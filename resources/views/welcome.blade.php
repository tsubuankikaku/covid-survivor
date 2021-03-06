@extends('layouts.app')

 @section('content')
 
 @if (Auth::check())
    <div class="row">  
     <div class="col-sm-6 offset-sm-3">
      <div class="card text-center mx-auto border border-0" >
      <img src="{{ Storage::disk('s3')->url($user->image) }}" class="rounded-circle">
     
       <div class="card-header">
       {{ Auth::user()->name }}
       </div>
        <div class="card-body">
         <p class="card-title">年齢：{{ Auth::user()->age }}</p>
         <p class="card-title">都道府県：{{ Auth::user()->region }}</p>
         <p class="card-title">メール：{{ Auth::user()->email}}</p>
        </div>
    　   
    　  
    　   {!! link_to_route('experiences.create', '体験談投稿', [], ['class' => 'btn btn-info']) !!}
    　   {!! link_to_route('job.chart', 'アンケート', [], ['class' => 'btn btn-info']) !!}
     
    　   
    　  
    　   　</div>
    　　</div>
 　  　</div>
 　  </div>
 　</div>
    @else
        
    <div class="center jumbotron bg-white" style="margin-bottom:0">
        <div class="text-center">
            <h1>コロナサバイバーのたまりば</h1>
            <br>
            <h5>コロナを乗り越えた皆さんの辛かったこと、<br>今直面していること、伝えたいことをシェアしてください。</h5>
        </div>
    </div>

      
        <div class="text-center">
          {!! link_to_route('experiences.create', '体験談投稿', [], ['class' => 'btn btn-info']) !!}
    　  　{!! link_to_route('job.chart', 'アンケート', [], ['class' => 'btn btn-info']) !!}
    　
    　  　</div>
      
          
 @endif
@endsection