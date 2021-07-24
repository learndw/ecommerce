<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Asigancion masiva

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //Uno a muchos
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    //Muchos a muchos
    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    //Relacion de uno a muchos a traves de otra relacion es decir una categoria tiene varios productos pero entre la categoria y productos esta una tabla intermedia que es la Subcategoria
    public function products()
    {
        $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
