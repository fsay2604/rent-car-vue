<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];

    public function maker() {
        return $this->hasMany(Car::class);
    }
}
