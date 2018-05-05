<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'client_id',
        'product_type_id',
        'material_id',
        'texture_type_id',
        'price',
        'color',
    ];

    public function product_type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id', 'id');
    }
    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id', 'id');
    }
    public function texture_type()
    {
        return $this->belongsTo(TextureType::class, 'texture_type_id', 'id');
    }
}
