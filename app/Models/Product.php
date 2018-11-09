<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'category_id',
        'price',
        'size',
        'quantity',
        'partner_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function provider()
    {
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }

    public function productimage()
    {
        return $this->belongsToMany(ImageProduct::class, 'product_image', 'product_id', 'image_id');
    }

    public function getImageAttribute()
    {
        return ($this->productimage[0]->path . '/' . $this->productimage[0]->filename);
    }

    public function getHargaAttribute()
    {
        return ('Rp' . number_format($this->price, 2, ',', '.'));
    }

}
