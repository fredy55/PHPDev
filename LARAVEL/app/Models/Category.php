<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $primaryKey = "category_id";

    protected $fillable = [
        'category'
    ];

    public $timestamps = true;


    public function product(){
       return $this->belongsTo(Product::class, 'category_id', 'product_id');
    }
}
