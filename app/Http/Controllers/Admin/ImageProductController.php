<?php

namespace App\Http\Controllers\Admin;

use App\imageProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function show(imageProduct $imageProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(imageProduct $imageProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imageProduct $imageProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\imageProduct  $imageProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(imageProduct $imageProduct)
    {
        return $request->all();
        return $imageProduct;
        $status = $imageProduct->delete();

        return response()->json([
            'status'=>'staus',
        ]);
    }
}
