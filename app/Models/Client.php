<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** 
    * Get the title associated to the client;
    */
    protected $table = 'Clients';

    protected $fillable =  [
        'title_id',
        'firstname',
        'lastname',
        'address',
        'zipcode',
        'city',
        'province',
        'email'
    ];

    public function title() {
        return $this->hasOne('App\Models\Title');
    }

    public function reservations() {
        return $this->hasMany('App\Models\Reservation');
    }
}
