<?php

namespace ClothingShop;

use Illuminate\Database\Eloquent\Model;
use ClothingShop\Category;
class Design extends Model
{
    protected $fillable = [
        'name','category_id'
    ];
    public function category() {
        return $this->belongsTo(Category::class , 'category_id');
    }
}
