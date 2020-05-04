<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    
    protected $guarded=[];
    public function venu()
    {
        return $this->belongsTo(Venu::class);
    }
}
