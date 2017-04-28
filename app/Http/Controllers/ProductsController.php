<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Mail\OrderCompleted;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('products.index',compact('products'));

    }

    public function addToCart(Request $request, $productId)
    {
         // $request->session()->flush();
        $request->session()->increment("userCommand.$productId");
        return redirect('/cart');
    }

    public function showCart(Request $request)
    {
        $productIds = $request->session()->get('userCommand');

        $products = Product::find(array_keys($productIds));

        $quantities = $request->session()->get('userCommand');

        return view('products.cart', compact('products','quantities'));
    }

    public function delete(Request $request, $productId)
    {
        $val = $request->session()->decrement('userCommand.'.$productId);

        if ($val <= 0) {
            $request->session()->forget('userCommand.'.$productId);
        }

        return redirect('/cart');
    }

    public function sendEmail(Request $request)
    {
        $firstName = $request->input('firstName');
        $secondName = $request->input('secondName');
        $address = $request->input('address');
        \Mail::to($request->input('email'))->send(new OrderCompleted,compact('firstName','secondName', 'address'));
        return view('products.finishOrder');
    }
}