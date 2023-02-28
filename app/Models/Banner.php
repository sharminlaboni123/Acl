<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_subtitle',
        'banner_title',
        'banner_percentage',
        'banner_type',
        'banner_image',
    ];
}
