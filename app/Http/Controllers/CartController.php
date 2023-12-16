<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\TransactionDetail;
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
        $totalPrice = 0;

        foreach ($cart as $menuId => $quantity) {
            $menu = MenuModel::find($menuId);

            if ($menu) {
                $price = $menu->harga * $quantity;

                $cartItems[] = [

                    'menu' => $menu,
                    'quantity' => $quantity,
                    'price' => $price,
                ];

                $totalPrice += $price;
            }
        }

        return view('cart')->with([
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }

    function placeOrder(Request $request)
    {
        $cart = Session::get('cart', []);

        $orderID = $request->input('unique_id');
        $customerName = $request->input('name');
        $tableNumber = $request->input('noMeja');

        $totalPrice = 0;

        foreach ($cart as $menuId => $quantity) {
            $menu = MenuModel::find($menuId);
            if ($menu) {
                $price = $menu->harga * $quantity;
                $totalPrice += $price;
            }
        }

        $transaction = Transaction::create([
            'nama_pemesan' => $customerName,
            'nomor_meja' => $tableNumber,
            'total_price' => $totalPrice,
            'order_id' => $orderID,
        ]);

        foreach ($cart as $menuId => $quantity) {
            $menu = MenuModel::find($menuId);

            if ($menu) {

                Order::create([
                    'menu_id' => $menuId,
                    'quantity' => $quantity,
                    'nomor_meja' => $tableNumber,
                    'nama_pemesan' => $customerName,
                    'order_id' => $orderID,
                ]);

                TransactionDetail::create([
                    'transaction_id' => $transaction->id,
                    'menu_id' => $menuId,
                    'quantity' => $quantity,
                    'order_id' => $orderID,
                ]);
            }
        }
        

        Session::forget('cart');

        return redirect()->back()->with('success', 'Order placed successfully. Order ID: ' . $orderID);
    }

}
