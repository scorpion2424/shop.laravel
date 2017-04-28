<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.indexAdmin', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $adminpage, Request $request)
    {
        $this->validate(request(), [
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'productName' => 'required|string',
            'productDescription' => 'required',
            'productPrice' => 'required|numeric'
        ]);


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            Storage::putFileAs(
                '/public/img', $request->file('image'), request()->file('image')->hashName()
            );

            $adminpage->image = request()->file('image')->hashName();

        }

        $adminpage->name = $request->input('productName');

        $adminpage->description = $request->input('productDescription');

        $adminpage->price = $request->input('productPrice');

        $adminpage->save();

        return redirect('/adminpage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $adminpage)
    {
        return view('admin.edit', compact('adminpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $adminpage, Request $request)
    {
        $this->validate(request(), [
            'image' => 'image|mimes:jpg,jpeg,png',
            'productName' => 'required|string',
            'productDescription' => 'required',
            'productPrice' => 'required|numeric'
        ]);


        if ($request->hasFile('image')) {

            Storage::putFileAs(
                '/public/img', $request->file('image'), request()->file('image')->hashName()
            );

            $adminpage->image = request()->file('image')->hashName();

        }

        $adminpage->name = $request->input('productName');

        $adminpage->description = $request->input('productDescription');

        $adminpage->price = $request->input('productPrice');

        $adminpage->save();

        return redirect('/adminpage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $adminpage)
    {
        $adminpage->delete();

        return redirect('/adminpage');
    }

}
