<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_slide',
        'name',
        'short_des',
        'long_des',
        'year_experience',
        'experience',
        'quantity_project',
        'project_text',
        'client_reviews',
        'client_reviews_text',
        'button_text',
    ];

}
