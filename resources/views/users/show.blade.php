@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                   
                    <img class="rounded img-fluid" >
                </div>
            </div>
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
            
                 {{-- ユーザ詳細タブ --}}
                <li class="nav-item">
                    <a href="{{ route('users.show', ['user' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.show') ? 'active' : '' }}">
                        TimeLine
                        <span class="badge badge-secondary">{{ $user->experiences_count }}</span>
                    </a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">経験談</a></li>
               
            </ul>
                    
               @if (Auth::id() == $user->id)
                {{-- 投稿フォーム --}}
                @include('experiences.form')
            @endif
            {{-- 投稿一覧 --}}
            @include('experiences.experiences')        
        </div>
    </div>
@endsection