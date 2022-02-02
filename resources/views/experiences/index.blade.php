@extends('layouts.app')

@section('content')
<!-- ここにページ毎のコンテンツを書く -->
<div class="text-center">
<h3>体験談一覧</h3>

    @if (count($experiences) > 0)
       
        @foreach($experiences as $index => $experience)
             
        <?php if ($index % 3 == 0) { ?> <div class="row"> <?php } ?>
        <div class="col-sm-4">
         <div class="card">
             <div class="card-header bg-info text-white"> {{ $experience->user->name }} {{$experience->user->age}}歳　</div>
     　    <div class="card-body">
            <p class="card-text text-truncate">{{ $experience->content }}</p>
            {!! link_to_route('experiences.show', 'Read More', ['experience' => $experience->id]) !!}
           </div>
          </div>
         <div class="card-footer text-muted">
          {{ $experience->created_at }}
         </div>
        </div>
       

        <?php if ($index % 3 == 2) { ?></div><?php } ?>
    @endforeach
       
        <?php if($index % 3 !== 2) echo '</div>'; ?>
            
    @endif
    
    {{-- 体験談投稿ページへのリンク --}}
    {!! link_to_route('experiences.create', '体験談投稿', [], ['class' => 'btn btn-info btn-block']) !!}

@endsection