<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceLevel extends Model
{
    use HasFactory;
    protected $fillable = [
        'price_level'
    ];

    public function restaurants()
    {
        return $this->hasMany('App\Models\Restaurant', 'pid');
    }
}
