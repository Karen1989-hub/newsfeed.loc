<?php

namespace App\Models;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Catagory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function news(){
        return $this->hasMany(News::class,'firstCategory','name')->orderBy('id','desc')->offset(1)->limit(5);
    }
    public function lastNews(){
        return $this->hasMany(News::class,'firstCategory','name')->orderBy('id','desc')->limit(1);
    }
}
