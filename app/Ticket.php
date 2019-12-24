<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function location()
    {
        return $this->hasOne(App\Location::class);
    }
    public function rate()
    {
        return $this->hasMany(App\Rate::class);
    }
    public function customer()
    {
        return $this->belongsTo(App\Rate::class);
    }
}
