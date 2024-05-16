<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $fillable = ['title', 'description','status'];
    public function BannerImage()
    {
        return $this->belongsTo(BannerImage::class);
    }
}
