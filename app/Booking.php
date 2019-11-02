<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    const CREATED_AT = 'creation_at';
    const UPDATED_AT = 'updated_at';
}
