<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotUser extends Model
{
    use HasFactory;

    /**
    * Get the horses of stable
    */
    public function horse()
    {
        return $this->belongsTo(Horse::class);
    }

    /**
    * Get the coach of stable
    */
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}
