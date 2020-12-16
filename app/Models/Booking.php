<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
    * Get the coaches of stable
    */
    public function booking_detail()
    {
        return $this->hasMany(BookingDetail::class);
    }
}