<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class OrderSuccess extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;
    protected $name;

    /**
     * OrderSuccess constructor.
     * @param $order
     * @param $name
     */
    public function __construct($order, $name)
    {
        $this->order = $order;
        $this->name = $name;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order_success', ['order' => $this->order , 'name' => $this->name]);
    }
}
