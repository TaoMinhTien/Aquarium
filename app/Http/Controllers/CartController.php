<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketVariant;
use App\Models\Ticket;
use App\Models\Event;


use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    //
    public function cartView()
    {
        // Session::flush(); 
        $cart = Session::get('cart');
        // dd($cart);
        return view('layout.cart', ['cartItems' => $cart]);
    }
    ///
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
            'success' => 'cart successfully.',
        ]);
    }
    /////
    public function cartRemove(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $cart = session()->get('cart', []);
        if (isset($cart[$ticketId])) {
            unset($cart[$ticketId]);
            session()->put('cart', $cart);
            return response()->json(['success' => 'Product removed from cart.'], 200);
        } else {
            return response()->json(['error' => 'Product not found in cart.'], 404);
        }
    }
    ////
    public function uploadQuantity(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $quantity = $request->input('quantity');
        if (!is_numeric($quantity) || $quantity < 1) {
            return response()->json(['success' => false, 'message' => 'Số lượng không hợp lệ.'], 400);
        }
        $cart = session()->get('cart', []);
        if (!isset($cart[$ticketId])) {
            return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại trong giỏ hàng.'], 404);
        }
        $cart[$ticketId]['quantity'] = $quantity;
        session()->put('cart', $cart);
        return response()->json(['success' => true, 'message' => 'Cập nhật số lượng thành công.']);
    }
}
