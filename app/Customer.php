<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user()
    {
        return $this->belongsTo(App\User::class);
    }

    public function orders()
    {
        return $this->hasMany(App\Order::class);
    }

    public function wallets()
    {
        return $this->hasMany(App\Wallet::class);
    }
}
