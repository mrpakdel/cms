<?php

namespace App\Http\Controllers\Admin;

use App\CategoryProduct;
use App\Manufacturer;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('Admin.products.all',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = Manufacturer::all();
        $suppliers = Supplier::all();
        $categories = CategoryProduct::all();
        return view('Admin.products.create',compact('categories','manufacturers','suppliers'));
    }

    public function ajax_single_product(Request $request){
        $products = Product::whereLang(app()->getLocale())->get();
        $local = app()->getLocale();
        $title = __('admin.Products');
        if($products){
            $listProduct = "";
            $listProduct = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input madule_id\" name=\"madule_id\"  data-lang=\"$local\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

            foreach ($products as $product){
                $listProduct .= "<option data-model='Product' value='$product->id'>$product->name</option>";
            }
            $listProduct .= "</select>";
        }
        return response()->json([
            'listProducts'=>$listProduct,
            'success'=>1,
        ]);
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
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $manufacturers = Manufacturer::all();
        $suppliers = Supplier::all();
        $categories = CategoryProduct::all();
        return view('Admin.products.edit',compact('categories','manufacturers','suppliers','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    public function ajax_add(Request $request){
        $product = auth()->user()->product()->create($request->all());
        if($product){
            $add_category = $product->category_products()->sync($request->input('category_product_id'));
            if($add_category){
                return response()->json([
                    'product_id'=>$product->id,
                    'update_mode'=>1,
                    'success'=>1
                ]);
            }else{
                return response()->json([
                    'product_id'=>$product->id,
                    'update_mode'=>1,
                    'success'=>0
                ]);
            }
        }else{
            return response()->json([
                'product_id'=>0,
                'update_mode'=>0,
                'success'=>0
            ]);
        }

    }


    public function ajax_update(Request $request){
        if($request->input('product') > 0){
            $inputs = $request->all();
            unset($inputs['btn']);
            unset($inputs['product']);
            $product_id = $request->product;
            $product = Product::whereId($product_id)->first();
            $update = $product->update($inputs);
            if($update){

                return response()->json([
                    'product_id'=>$product->id,
                    'update_mode'=>1,
                    'success'=>1
                ]);

            }else{
                //update unssuccessfully
            }
        }else{
            //product not selected
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

}
