<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function goods(){
        return $this->hasMany(Good::class);
    }

    public function stocks(){
        return $this->hasMany(Stock::class);
    }
}
