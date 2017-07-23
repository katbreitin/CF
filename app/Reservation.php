<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'room_number',
        'capacity',
        'updated_by_user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'reserved_for_user_id');
    }
}
