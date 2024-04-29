<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;
    public function ticketVariants()
    {
        return $this->hasMany(TicketVariant::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
