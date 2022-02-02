<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = [
        'job', 'route', 'symptom','level','duration','after_effect','symptom_after','reaction','anything'
    ];
}
