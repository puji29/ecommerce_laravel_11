<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_category',
        'image',
        'url',
    ];

    protected function image() : Attribute {
        return Attribute::make(
            get: fn ($image)=>url('/storage/categories/' . $image),
        );
    }
}
