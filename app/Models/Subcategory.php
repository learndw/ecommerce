<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    //Uno a muchos
    public function products()
    {
        $this->hasMany(Product::class);
    }

    //Uno a muchos inverso
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
