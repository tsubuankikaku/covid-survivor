@extends('layouts.app')

@section('content')
<div class="text-center">
    <h3>体験談詳細ページ</h3>

    
         <div class="card">
          <div class="card-body">
     　 
           <p class="card-text">{{ $experience->content }}</p>
           
          </div>
         </div>
           
    
    <span>
<img src="{{asset('img/likebtn.png')}}" width="30px">
 
<!-- もし$likeがあれば＝ユーザーが「役に立った」をしていたら -->
@if($like)
<!-- 「役に立った」取消用ボタンを表示 -->
	<a href="{{ route('unlike', $experience) }}" class="btn btn-success btn-sm">
		役に立った！
		<!-- 「いいね」の数を表示 -->
		<span class="badge">
			{{ $experience->likes->count() }}
			
		</span>
	</a>
@else
<!-- まだユーザーが「役に立った」をしていなければ、「役に立った」ボタンを表示 -->
	<a href="{{ route('like', $experience) }}" class="btn btn-secondary btn-sm">
		役に立った！
		<!-- 「いいね」の数を表示 -->
		<span class="badge">
			{{ $experience->likes->count() }}
		</span>
	</a>
@endif
</span>
</div>

@endsection