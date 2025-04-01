<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelTask extends Model
{
    protected $fillable = [
        'nome',
        'horas',
        'created_at',
        'updated_at', 
    ];
}
