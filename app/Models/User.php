<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'phone', 'email', 'password', 'company', 'city', 'address', 'role'
    ];

    protected $hidden = ['password', 'remember_token'];

    // Relationships
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
