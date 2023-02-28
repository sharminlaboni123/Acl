<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'people',
        'total_product',
        'tp_image',
    ];
}
