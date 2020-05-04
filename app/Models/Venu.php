<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venu extends Model
{
    protected $guarded=[];
     public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
