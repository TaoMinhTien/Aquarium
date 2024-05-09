<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalInfor extends Model
{
    protected $table = 'animals_infor';
    protected $fillable = [
        'title',
        'image', 
        'description',
    ];
}
