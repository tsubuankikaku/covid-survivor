<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Experience;
use App\Like;
use App\User;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
     public function like(Experience $experience, Request $request){
        $like=New Like();
        $like->experience_id=$like->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }  
    
     public function unlike(Experience $experience, Request $request){
        $user=Auth::user()->id;
        $like=Like::where('experience_id', $experience->id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }
}
