<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelDetail extends Model
{
    protected $table = 'hotel_detail';
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
}
