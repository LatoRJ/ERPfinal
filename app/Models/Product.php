<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'Category_ID',
        'name',
        'product_desc',
        'price',
        'piece',
        'image',
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'Category_ID', 'Category_ID');
}

    public function colors()
    {
        return $this->hasMany(Color::class, 'product_id');
    }
}
