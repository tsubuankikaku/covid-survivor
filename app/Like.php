<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
 
    public function experience() {
        return $this->belongsTo('App\Models\Experience');
    }
}
