<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(App\User::class);
    }

    public function wallet()
    {
        return $this->hasMany(App\Wallet::class);
    }
}
