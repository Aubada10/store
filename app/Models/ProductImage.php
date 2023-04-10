<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_color_size_id',
        'image'
    ];
    protected $table = 'product_images';

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function productColorSize(){
        return $this->hasMany(ProductColorSize::class);
    }
}
