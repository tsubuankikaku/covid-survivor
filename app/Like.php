<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{   
    protected $fillable = ['experience_id','user_id'];
    
    public function user() {
        return $this->belongsTo(Experience::class);
    }
 
    public function experience() {
        return $this->belongsTo(User::class);
    }
}
