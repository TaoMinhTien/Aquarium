<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AboutUs extends Model
{
    protected $fillable = ['client_name', 'description'];

    public function images(): HasMany
    {
        return $this->hasMany(AboutUsImage::class);
    }
}
