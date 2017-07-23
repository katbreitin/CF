<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_id',
        'reservation_start_at',
        'reservation_end_at',
        'reserved_for_user_id',
        'updated_by_user_id'
    ];
}
