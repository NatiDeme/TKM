<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderType()
    {
        return $this->hasOne(App\OrderType::class);
    }
}
