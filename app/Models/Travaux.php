<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travaux extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_travaux',
        'name',
        'slug',
        'description',
        'technologie',
        'lien',
        
    ];
}
