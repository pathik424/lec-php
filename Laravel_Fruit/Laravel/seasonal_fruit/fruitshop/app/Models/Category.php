<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category','visible'];
protected $casts = ['category'=>'json'];

public function brands() //a relation apyu category nu brand jode ane Product jode
{
    return $this->hasMany(Brand::class);
}
public function product()
{
    return $this->hasMany(Product::class);
    //         return $this->hasManyThrough(Deployment::class, Environment::class);

}
}
