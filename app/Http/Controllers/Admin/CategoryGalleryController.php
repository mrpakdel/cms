<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\CategoryGallery;
use App\Http\Requests\CategoryGalleryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryGalleryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryGallery::latest()->paginate(25);
        return view('Admin.categoryGalleries.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = CategoryGallery::all();
        return view('Admin.categoryGalleries.create',compact('parents'));
    }

    public function ajax_category(Request $request){
        $categories = CategoryGallery::whereLang(app()->getLocale())->get();
        $local = app()->getLocale();
        $title = __('admin.Category');
        if($categories){
            $cate = "";
            $cat = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input madule_id\" name=\"madule_id\"  data-lang=\"$local\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

            foreach ($categories as $category){
                $cat .= "<option data-model='CategoryGallery' value='$category->id'>$category->title</option>";
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
    public function store(CategoryGalleryRequest $request)
    {

        if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $categoryGallery = CategoryGallery::create(array_merge($request->all(),['status'=>$status]));
        if($categoryGallery){
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param CategoryGallery $categoriesGallery
     * @return void
     */
    public function show(CategoryGallery $categoriesGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CategoryGallery $categoriesGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryGallery $categoriesGallery)
    {
        $categories = CategoryGallery::all();
        return view('Admin.categoryGalleries.edit',compact('categoriesGallery','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryGallery  $categoryGallery
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryGalleryRequest $request, CategoryGallery $categoriesGallery)
    {

        if($request->status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $inputs = array_merge($request->all() , ['status'=>$status]);
        $update = $categoriesGallery->update($inputs);
        if($update){
            return redirect()->back()->with('message',[__('admin.update_s'),'success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param CategoryGallery $categoriesGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryGallery $categoriesGallery)
    {
        $categoriesGallery->delete();
        return response()->json([
            'status'=>1,
        ]);
    }
}
