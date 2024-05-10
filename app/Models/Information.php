<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Information extends Model
{
    protected $fillable = ['title', 'description'];

    protected $table = 'informations';
}
