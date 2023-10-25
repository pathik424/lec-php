<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sellers extends Model
{
    use HasFactory;
    protected $fillable = ['sellers_details','sellers_documents'];

    protected $casts = [

        'sellers_details' =>'json',
        'sellers_documents' =>'json'
    ];
}
