<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';

    protected $fillable = [
        'quantity',
        'order_date	',
        'notes',
        'status',
        'totalmount',

    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function orderNumber()
    {
        return $this->belongsTo(OrderNumber::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
