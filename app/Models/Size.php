<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable=['name','product_id'];

    //Inversa uno a muchos
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //Muchos a muchos
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
