<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_event',
        'audience',
        'description',
        'start_date',
        'end_date',
        'status', 
        'address',
    ];
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    public function ticketVariants()
{
    return $this->hasMany(TicketVariant::class);
}
}
