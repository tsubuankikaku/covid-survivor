<?php

namespace App;

use App\Job;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    
    protected $fillable=[
        'job',
        'number',
    ];
}
