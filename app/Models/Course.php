<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;

class course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        
    ];
}
