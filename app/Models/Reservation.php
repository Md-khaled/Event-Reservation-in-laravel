<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded=[];
    protected $casts = [
        'foodtype' => 'array',
        'equipmenttype' => 'array',
        'decorationtype' => 'array',
    ];
    public function setOptionsAttribute($options)
{
    $this->attributes['foodtype'] = json_encode($options);
}
	public function eventtype()
    {
        return $this->belongsTo(EventType::class,'event_type_id');
    }
    public function food()
    {
        return $this->belongsTo(Food::class,'event_type_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
}
