<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'category_id',
        'user_id',
        'merk',
        'type',
        'kerusakan_id',
        'tanggal',
        'waktu',
        'alamat',
        'promo',
        'total',
    ];

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }
}
