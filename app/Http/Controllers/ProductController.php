<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private static function getData() {
        return [
            ['id' => 1, 'name' => 'first', 'price' => 14.99, 'images' => '/images/dragon1.png'],
            ['id' => 2, 'name' => 'second', 'price' => 9.99, 'images' => '/images/dragon2.png'],
            ['id' => 3, 'name' => 'third', 'price' => 7.99, 'images' => '/images/dragon3.png'],
            ['id' => 4, 'name' => 'fourth', 'price' => 19.99, 'images' => '/images/dragon4.png'],
            ['id' => 5, 'name' => 'fifth', 'price' => 4.99, 'images' => '/images/dragon5.png'],
            ['id' => 6, 'name' => 'sixth', 'price' => 12.99, 'images' => '/images/dragon6.png'],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index', [
            'products' => self::getData(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
