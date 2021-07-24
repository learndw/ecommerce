<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Uno a muchos
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    //Uno a muchos inversa
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        $this->belongsTo(Subcategory::class);
    }

    //Muchos a muchos

    public function colors()
    {
        return $this->hasMany(Color::class);
    }

    //Uno a muchos polimorfica
    public function image()
    {
        return $this->morphMany(Image::class,'imageable');
    }
}
