<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InformationImage extends Model
{
    protected $fillable = ['image_url'];

    public function information(): BelongsTo
    {
        return $this->belongsTo(Information::class);
    }
}
