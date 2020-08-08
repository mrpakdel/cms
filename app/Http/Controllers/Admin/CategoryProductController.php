<?php

namespace App\Http\Controllers\Admin;

use App\CategoryProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryProduct::all();
        return view('Admin.categoryProducts.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = CategoryProduct::all();
        return view('Admin.categoryProducts.create',compact('parents'));
    }

    public function ajax_category(Request $request){
        $categories = CategoryProduct::whereLang(app()->getLocale())->get();
        $local = app()->getLocale();
        $title = __('admin.Category');
        if($categories){
            $cate = "";
            $cat = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input madule_id\" name=\"madule_id\"  data-lang=\"$local\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

            foreach ($categories as $category){
                $cat .= "<option data-model='CategoryProduct' value='$category->id'>$category->name</option>";
            }
            $cat .= "</select>";
        }
        return response()->json([
            'categories'=>$cat,
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
        $category = CategoryProduct::create($request->all());
        if($category){
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryProduct $categoryProduct)
    {

        $parents = CategoryProduct::all();
        return view('Admin.categoryProducts.edit',compact('parents','categoryProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProduct $categoryProduct)
    {
        $inputs = $request->all();
        $categoryProduct->update($inputs);
        return redirect()->back()->with('message',[__('admin.update_s'),'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $categoryProduct)
    {
        $categoryProduct->delete();
        return response()->json([
            'status'=>1,
        ]);
    }
}
