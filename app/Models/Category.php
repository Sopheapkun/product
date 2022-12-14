<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categorys";
    protected $primarykey ="id";
    protected $fillable = [
        'category_name',
    ];

    use HasFactory;


    public function getComapany(){
        return $this->hasOne(Product::class,'category_id');
    }
}
