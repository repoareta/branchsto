<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    /**
    * Get the owner of stable
    */
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
