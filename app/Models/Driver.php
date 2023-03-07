<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $appends = ['image'];

    public function getImageAttribute()
    {
       
        return url($this->picture);
    }
}
