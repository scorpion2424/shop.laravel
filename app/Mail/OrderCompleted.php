<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Product;

class orderCompleted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $productIds = $request->session()->get('userCommand');
        $products = Product::find(array_keys($productIds));
        $quantities = $request->session()->get('userCommand');
        $firstName = request('firstName');
        $secondName = request('secondName');
        $address = request('address');
        $request -> session() -> forget('userCommand');
        return $this -> view('emails.OrderCompleted', compact('products','quantities', 'firstName', 'secondName', 'address'));
    }
}
