<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
     protected $table = 'hotel_room';
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
}
