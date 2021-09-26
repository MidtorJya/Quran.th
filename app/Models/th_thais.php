<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class th_thais extends Model
{
    use HasFactory;
    public function ThaiText()
    {
        return $this->belongsTo(data_surahs::class);
    }
}
