<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
    protected $primarykey ='id';
    protected $fillable = [
        'product_name',
        'category_id',
    ];

    use HasFactory;


    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getCreator(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function getOneCategory()
    // {
    //     return $this->belongs
    // }


}
