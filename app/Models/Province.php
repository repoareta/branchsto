<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    /**
     * Get the cities for Province.
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
