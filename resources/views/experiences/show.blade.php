@extends('layouts.app')

@section('content')
<div class="text-center">
    <h3>体験談詳細ページ</h3>

    
         <div class="card">
          <div class="card-body">
     　 
           <p class="card-text">{{ $experience->content }}</p>
           
          </div>
         </div>
           
     {!! Form::close() !!}
    <span>
<img src="{{asset('img/likebtn.png')}}" width="30px">
 
<!-- もし$likeがあれば＝ユーザーが「いいね」をしていたら -->
@if($like)
<!-- 「いいね」取消用ボタンを表示 -->
	<a href="{{ route('unlike', $experience) }}" class="btn btn-success btn-sm">
		いいね
		<!-- 「いいね」の数を表示 -->
		<span class="badge">
			{{ $experience->likes->count() }}
			
		</span>
	</a>
@else
<!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
	<a href="{{ route('like', $experience) }}" class="btn btn-secondary btn-sm">
		いいね
		<!-- 「いいね」の数を表示 -->
		<span class="badge">
			{{ $experience->likes->count() }}
		</span>
	</a>
@endif
</span>
</div>

@endsection