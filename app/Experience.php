<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Experience extends Model
{
     protected $fillable = ['content'];
     
     

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
      
    public function likes() {
        return $this->hasMany(Like::class, 'experience_id');
    }
    
    public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $likers = array();
    foreach($this->likes as $like) {
      array_push($likers, $like->user_id);
    }

    if (in_array($id, $likers)) {
      return true;
    } else {
      return false;
    }
  }
}
