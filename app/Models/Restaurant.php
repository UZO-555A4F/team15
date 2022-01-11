<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'gid',
        'pid',
        'telephone'
    ];

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre', 'gid', 'id');
    }

    public function price_level()
    {
        return $this->belongsTo('App\Models\PriceLevel', 'pid', 'id');
    }
}
