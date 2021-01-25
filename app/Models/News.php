<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title','imgName','text1','text2','firstCategory','lastCategory','sliderPosition','create_at','update_at'];
    public $timestamps = false;
    use HasFactory;
}
