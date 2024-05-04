<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_id',
        'quantity', 
        'price',
        'image',
    ];
    public function ticketVariants()
    {
        return $this->hasMany(TicketVariant::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
