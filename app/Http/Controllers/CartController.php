<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    function addItem(Request $request)
    {
        $menuId = $request->input('menu_id');
        $numberOrder = $request->input('number_order');

        $cart = Session::get('cart', []);

        if (isset($cart[$menuId])) {
            $cart[$menuId] += $numberOrder;
        } else {
            $cart[$menuId] = $numberOrder;
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Item added to cart successfully');
    }

    function viewCart()
    {
        $cart = Session::get('cart', []);

        $cartItems = [];
        foreach ($cart as $menuId => $quantity) {
            $menu = MenuModel::find($menuId);

            if ($menu) {
                $cartItems[] = [
                    'menu'      => $menu,
                    'quantity'  => $quantity,
                    'price'     => $menu->harga * $quantity 
                ];
            }
        }

        return view('cart')->with('cartItems', $cartItems);
    }
}
