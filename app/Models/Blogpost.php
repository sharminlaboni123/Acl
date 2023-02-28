<?php

namespace App\Models;
use App\Models\Postcategory;
use App\Models\Posttag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Postcategory::class,'post_cat_id','id');
    }

    public function tag()
    {
        return $this->belongsTo(Posttag::class,'post_tag_id','id');
    }

    
}