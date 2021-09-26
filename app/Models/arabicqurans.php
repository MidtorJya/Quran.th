<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class arabicqurans extends Model
{
    use HasFactory;
    public function ArabicText()
    {
        return $this->belongsTo(data_surahs::class);
    }
}
