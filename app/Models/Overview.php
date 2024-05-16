<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    protected $table = 'overviews';

    protected $fillable = ['title', 'description','status'];
    public function OverviewImage()
    {
        return $this->belongsTo(OverviewImage::class);
    }
}
