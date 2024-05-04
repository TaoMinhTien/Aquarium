<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AboutUsImage extends Model
{
    protected $fillable = ['image_url'];

    public function aboutUs(): BelongsTo
    {
        return $this->belongsTo(AboutUs::class);
    }
}
