<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function kerusakan()
    {
        return $this->hasMany(Kerusakan::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
