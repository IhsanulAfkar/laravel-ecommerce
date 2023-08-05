<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('page.home', [
            'title' => 'Home'
        ]);
    }
    public function shop()
    {
        $flowers = Flower::all()->toArray();
        return view('page.shop', [
            'title' => 'Shop',
            'flowers' => $flowers
        ]);
    }
    public function shopInsert(Request $request)
    {
        $request->validate([
            'flower_id' => 'required',
            'quantity' => 'required|integer|gt:0'
        ]);
        $user = User::where('email', Auth::user()->email)->first();
        $cart = json_decode($user->cart);
        $cart[$request->flower_id - 1] += $request->quantity;
        $user->cart = json_encode($cart);
        $user->save();
        return redirect('/shop');
    }

    public function cart()
    {
        $user = User::where('email', Auth::user()->email)->first();
        $cart = json_decode($user->cart);
        // dd($cart);
        $flowers = Flower::all()->toArray();
        // dd($flowers[0]['']);
        // dd($flowers);
        $newArr = array();

        for ($i = 0; $i < count($flowers); $i++) {
            if ($cart[$i]) {
                $newArr[] = [
                    'name' => $flowers[$i]['name'],
                    'img' => $flowers[$i]['image'],
                    'quantity' => $cart[$i],
                    'price' => $flowers[$i]['price'] * $cart[$i]
                ];
            }
        }
        // dd($newArr);

        $data = [
            'title' => 'Cart',
            'flowers' => $newArr,
            'balance' => $user->balance
        ];
        return view('page.cart', $data);
    }
    public function purchase()
    {
        $user = User::where('email', Auth::user()->email)->first();
        $cart = json_decode($user->cart);
        $flowers = Flower::all()->toArray();
        $totalPrice = 0;
        for ($i = 0; $i < count($flowers); $i++) {
            if ($cart[$i]) {
                $totalPrice += $flowers[$i]['price'] * $cart[$i];
            }
        }
        if ($totalPrice <= 0) {
            return redirect('/cart')->with('message', 'Error, empty or invalid items');
        }
        // dd($totalPrice);
        if ($user->balance >= $totalPrice) {
            $user->balance -= $totalPrice;
            $user->cart = '[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]';
            $user->save();
            return redirect('/cart')->with('message', 'Purchase Successful');
        }
        return redirect('/cart')->with('message', 'Insufficent Balance');
    }
}
