<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['maker_id', 'category_id', 'model', 'seats', 'image', 'description'];

    public function category(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function maker(): \Illuminate\Database\Eloquent\Relations\belongsTo
     {
        return $this->belongsTo(Maker::class);
    }
}
