<?php

namespace App\Models;
use App\Models\Blogpost;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcategory extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    // public function blogposts() {
    //     return $this->hasMany(Blogpost::class);
    // }
   
}
