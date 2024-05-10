<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketVariant;
use App\Models\Ticket;
use App\Models\Event;


use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    //view cart
    public function cartView()
    {
        // Session::flush(); 
        $cart = Session::get('cart');
        // if ($cart) {
        //     $totalItems = count($cart);
        // } else {
        //     $totalItems = 0;
        // }
        return view('layout.cart', [
            'cartItems' => $cart,
        ]);
    }
    ///
    public function cartQuantity()
    {
        $cart = Session::get('cart');
        if($cart ) {
            $cartQuantity = count($cart);
        }else{
            $cartQuantity = 0;
        }
        return response()->json(['cartQuantity' => $cartQuantity]);
    }
    ///
    public function getTotalItems()
    {
        $cart = Session::get('cart');
        if ($cart) {
            $totalItems = count($cart);
        } else {
            $totalItems = 0;
        }
        return response()->json([
            'success' => TRUE,
            'totalItems' => $totalItems,
        ]);
    }
    /// add cart
    function handleAddCart(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $quantity = $request->input('quantity');
        $ticket = Ticket::find($ticketId);
        if (!$ticket) {
            return response()->json([
                'success' => false,
                'message' => 'Vé không tồn tại.',
            ]);
        }
        $ticketQuantity = $ticket->quantity;
        if ($quantity > $ticketQuantity) {
            return response()->json(['success' => false, 'message' => 'The quantity exceeds the remaining stock.']);
        }
        $event = Event::find($ticket->event_id);
        if (!$event) {
            return response()->json([
                'success' => false,
                'message' => 'Sự kiện không tồn tại.',
            ]);
        }
        $cart = Session::get('cart', []);
        if (isset($cart[$ticketId])) {
            $cart[$ticketId]['quantity'] += $quantity;
            $cart[$ticketId]['total_price'] += $ticket->price * $quantity;
        } else {
            $cartItem = [
                'ticket_id' => $ticket->id,
                'event_id' => $ticket->event_id,
                'name' => $ticket->name,
                'quantity' => $quantity,
                'image' => $ticket->image,
                'price' => $ticket->price,
                'event_id' => $event->id,
                'event_name' => $event->name_event,
                'start_date' => $event->start_date,
                'end_date' => $event->end_date,
                'address' => $event->address,
                'total_price' => $ticket->price * $quantity,
            ];
            $cart[$ticketId] = $cartItem;
        }
        Session::put('cart', $cart);
        return response()->json([
            'success' => true,
            'success' => 'cart successfully.',
            'test' => $cart,
        ]);
    }
    ///// remove form cart item
    public function cartRemove(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $cart = session()->get('cart', []);
        if (isset($cart[$ticketId])) {
            unset($cart[$ticketId]);
            session()->put('cart', $cart);
            return response()->json(['success' => 'Product removed from cart.']);
        } else {
            return response()->json(['error' => 'Product not found in cart.']);
        }
    }
    //// change quantity in cart
    public function uploadQuantity(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $quantity = $request->input('quantity');
        if (!is_numeric($quantity) || $quantity < 1) {
            return response()->json(['success' => false, 'message' => 'Invalid quantity.']);
        }
        $cart = session()->get('cart', []);
        $ticket = Ticket::find($ticketId);
        $ticketQuantity = $ticket->quantity;
        if ($quantity > $ticketQuantity) {
            return response()->json(['success' => false, 'message' => 'The quantity exceeds the remaining stock.']);
        }
        $price = $cart[$ticketId]['price'];
        $totalPrice = $quantity * $price;
        $cart[$ticketId]['total_price'] = $totalPrice;
        if (!isset($cart[$ticketId])) {
            return response()->json(['success' => false, 'message' => 'The product does not exist in the shopping cart.']);
        }
        $cart[$ticketId]['quantity'] = $quantity;
        session()->put('cart', $cart);
        return response()->json(['success' => true, 'message' => 'Updated quantity successfully.']);
    }
    ///total, subtotal
    public function updateTotalInCart()
    {
        $cart = Session::get('cart');
        $total = 0;
        $subtotal = 0;
        $discount = 0;
        if ($cart && count($cart) > 0) {
            foreach ($cart as $item) {
                $subtotal += $item['total_price'];
            }
            $total = $subtotal - $discount;
        } else {
            $total = 0;
            $subtotal = 0;
            $discount = 0;
        }


        $dataTotal = [
            'total' => $total,
            'discount' => $discount,
            'subtotal' => $subtotal,
        ];
        Session::put('cart', $cart);
        return response()->json(['dataTotal' => $dataTotal]);
    }
}
