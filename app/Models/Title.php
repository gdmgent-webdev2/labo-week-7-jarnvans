<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //
    public function clients() {
        return $this->hasMany('App\Models\Client');
    }
}
