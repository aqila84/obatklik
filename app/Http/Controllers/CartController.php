<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Item;

class CartController extends Controller
{
    //
    public function addToCart(Request $request, $itemId)
        {
            $user = auth()->user();

            // Memastikan user memiliki cart
            $cart = Cart::where('user_id', $user->id)->first();
            if (!$cart) {
                $cart = Cart::create(['user_id' => $user->id]);
            }

            // Mendapatkan quantity
            $quantity = $request->input('quantity', 1);
            
            // Tambahkan item ke cart tanpa duplikasi
            $cart->items()->syncWithoutDetaching([
                $itemId => ['quantity' => $quantity]
            ]);

            // Redirect ke halaman cart
            return redirect()->route('cart.view')->with('success', 'Item successfully added to cart');
        }

    public function viewCart()
    {
        $user = auth()->user();
        $cart = Cart::with('items')->where('user_id', $user->id)->first();

        if (!$cart || $cart->items->isEmpty()) {
            return view('cart', ['message' => 'Keranjang Anda kosong.']);
        }

        $totalPrice = $cart->items->sum(function($item) {
            return $item->itemPrice * $item->pivot->quantity;
        });

        return view('cart', compact('cart','totalPrice'));
    }

}
