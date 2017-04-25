<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Mail\OrderCompleted;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));

    }

    public function addToCart(Request $request, $product)
    {
        //  $request->session()->flush();

        $request->session()->push('userCommand', $product);
        return redirect('/cart');
    }

    public function showCart(Request $request)
    {

        $products = $request->session()->get('userCommand');

        return view('products.cart', compact('products'));
    }

    public function delete(Request $request, $product)
    {
        $products = $request->session()->get('userCommand');

        unset($products[$product]);

        $request->session()->forget('userCommand');

        foreach ($products as $product)
        {
            $request->session()->push('userCommand', $product);
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