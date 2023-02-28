<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopSelling extends Model
{
    use HasFactory;

    protected $fillable= [
        'l_primary',
        'l_sell',
        'p_image',
        'p_wishlist',
        'p_gender',
        'p_item',
        'p_title',
        'p_price',
        'p_n_price',
        'p_o_price',
        'p_rating_val',
        'p_rating_number',
        'p_color_f',
        'p_color_s',
        'p_cart',
        'p_view',
    ];
}
