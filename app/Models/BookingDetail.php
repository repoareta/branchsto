<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;

    /**
    * Get the owner of coach
    */
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    /**
    * Get the owner of coach
    */
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
