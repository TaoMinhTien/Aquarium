<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OverviewImage extends Model
{
    protected $fillable = ['image_url'];

    public function overview(): BelongsTo
    {
        return $this->belongsTo(Overview::class);
    }
}
