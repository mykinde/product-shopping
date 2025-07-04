<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'image', 'description',
        'category_id', 'quantity', 'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartItems()
    {
        return $this->hasMany(Cart::class);
    }
}
