<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OverviewImage extends Model
{
    protected $table = 'overview_images';

    protected $fillable = [
        'overview_id',
        'image_url',
    ];

    public function banner(): BelongsTo
    {
        return $this->belongsTo(Overview::class);
    }
}
