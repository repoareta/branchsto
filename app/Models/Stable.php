<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stable extends Model
{
    use HasFactory;

    /**
    * Get the owner of stable
    */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /**
    * Get the horses of stable
    */
    public function horse()
    {
        return $this->hasMany(Horse::class);
    }

    /**
    * Get the coaches of stable
    */
    public function coach()
    {
        return $this->hasMany(Coach::class);
    }
}
