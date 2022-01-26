<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Experience;
use App\Like;
use App\User;
use Illuminate\Support\Facades\Auth;

class LikesController extends Controller
{
    
   
   
    public function like($id)
  {
    Like::create([
      'experience_id' => $id,
      'user_id' => Auth::id(),
    ]);

    
    return redirect()->back();
  }
    
      public function unlike($id)
  {
    $like = Like::where('experience_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();


    return redirect()->back();
  }
}
