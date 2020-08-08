<?php

namespace App\Http\Controllers\Admin;

use App\CategoryFile;
use App\Http\Requests\CategoryFileRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $local = app()->getLocale();
        $categories = CategoryFile::whereLang($local)->paginate(25);
        return view('Admin.categoryFiles.all',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryFile::whereLang(app()->getLocale())->get();
        return view('Admin.categoryFiles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFileRequest $request)
    {
        $category = CategoryFile::create($request->all());
        if($category){
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryFile $categoryFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryFile $categoryFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryFile $categoryFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryFile  $categoryFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryFile $categoryFile)
    {
        //
    }


    public function ajax_category(Request $request){
        $categories = CategoryFile::whereLang(app()->getLocale())->get();
        $local = app()->getLocale();
        $title = __('admin.Category');
        if($categories){
            $cate = "";
            $cat = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input madule_id\" name=\"madule_id\"  data-lang=\"$local\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

            foreach ($categories as $category){
                $cat .= "<option data-model='CategoryFile' value='$category->id'>$category->title</option>";
            }
            $cat .= "</select>";
        }
        return response()->json([
            'categories'=>$cat,
            'success'=>1,
        ]);
    }
}
