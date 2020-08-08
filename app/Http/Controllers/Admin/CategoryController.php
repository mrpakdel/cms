<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Content;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $local = app()->getLocale();
        $categories = Category::whereLang($local)->paginate(25);
        return view('Admin.categories.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
       $category = Category::create($request->all());
       if($category){
           return redirect()->back()->with('message',[__('admin.create_s'),'success']);
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }


    public function ajax_category(Request $request){
        $categories = Category::whereLang(app()->getLocale())->whereStatus(1)->get();
        $local = app()->getLocale();
        $title = __('admin.Category');
        if($categories){
            $cate = "";
            $cat = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input maddule_id\" name=\"madule_id\"  data-lang=\"$local\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

            foreach ($categories as $category){
                $cat .= "<option data-model='Category' value='$category->id'>$category->title</option>";
            }
            $cat .= "</select>";
        }
        return response()->json([
           'categories'=>$cat,
            'success'=>1,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $parents = Category::all();
        return view('Admin.categories.edit',compact('category','parents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->back()->with('message',[__('admin.update_s'),'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
           'status'=>1,
        ]);
    }
}
