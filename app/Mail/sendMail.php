<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $cartCheckout;
    public $dataCheckout;
    public $orderTime;
    public $orderNumber;
    public $payment;
    public $orderTotal;
    public $totalPrice;
    public $qrCode;

    /**
     * Create a new message instance.
     */
    public function __construct(
        $cartCheckout,
        $dataCheckout,
        $orderTime,
        $orderNumber,
        $payment,
        $orderTotal,
        $totalPrice,
    ) {
        $this->cartCheckout = $cartCheckout;
        $this->dataCheckout = $dataCheckout;
        $this->orderTime = $orderTime;
        $this->orderNumber = $orderNumber;
        $this->payment = $payment;
        $this->orderTotal = $orderTotal;
        $this->totalPrice = $totalPrice;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = 'Thank you for orders!';
        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
