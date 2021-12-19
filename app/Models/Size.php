<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    //Relacion uno a muchos inversa
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //Relacion muchos a muchos inversa
    public function colors()
    {
        return $this->belongsToMany(Color::class)->withPivot('id','quantity');
    }
}
