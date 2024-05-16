<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $table = 'Informations';

    protected $fillable = ['title', 'description','status'];
    public function InformationImage()
    {
        return $this->belongsTo(InformationImage::class);
    }
}
