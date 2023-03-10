<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $primaryKey = "product_id";

    protected $fillable = [
        'name',
        'price',
        'description',
        'img_url',
        'isActive'
    ];

    public $timestamps = true; 
    

    public function category(){
        return $this->hasMany(Category::class, 'category_id', 'category_id');
    }

}
