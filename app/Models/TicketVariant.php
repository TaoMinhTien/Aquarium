<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketVariant extends Model
{
    use HasFactory;
    protected $table = 'ticket_variant';
    protected $fillable = [
        'event_id',
        'ticket_id',
    ];
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    
}
