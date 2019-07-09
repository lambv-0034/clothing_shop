<?php

namespace ClothingShop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];
    public function designs() {
        return $this->hasMany(Design::class , 'category_id');
    }
}
