<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BannerImage extends Model
{
    protected $fillable = ['image_url'];

    public function banner(): BelongsTo
    {
        return $this->belongsTo(Banner::class);
    }
}
