<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalInforInfor extends Model
{
    protected $table = 'animal_infor_infor';
    protected $fillable = [
        'description',
        'animal_id'
    ];
}
