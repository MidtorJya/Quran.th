<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasurah extends Model
{
    use HasFactory;
    public function arabic()
    {
        return $this->hasMany(Arabic::class);
    }
    
}