<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Content;
use App\Http\Requests\ContentRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $local = app()->getLocale();
        $contents = Content::latest()->whereLang($local)->paginate(25);
        return view('Admin.contents.all',compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $local = app()->getLocale();
        $categories = Category::whereLang($local)->get();
        return view('Admin.contents.create',compact('categories','local'));
    }


    public function ajax_single_content(Request $request){
    $contents = Content::whereLang(app()->getLocale())->get();
    $local = app()->getLocale();
    $title = __('admin.Contents');
    if($contents){
        $listContent= "";
        $listContent = "
                            <label for=\"exampleSelect2\">$title</label>
                            <select  class=\"form-control m-input mudule\" name=\"mudule_id\"  data-lang=\"$local\" id=\"exampleSelect2\">
                                <option value=\"0\">".__('admin.Select')."</option>";

        foreach ($contents as $content){
            $listContent .= "<option data-model='Content' value='$content->id'>$content->title</option>";
        }
        $listContent .= "</select>";
    }
    return response()->json([
        'listContent'=>$listContent,
        'success'=>1,
    ]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param ContentRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContentRequest $request)
    {
        auth()->user()->contents()->create($request->all());
        return redirect(route('contents.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        $local = app()->getLocale();
        $categories = Category::all();
        return view('Admin.contents.edit',compact('content','categories','local'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(ContentRequest $request, Content $content)
    {
        $inputs = $request->all();
        $content->update($inputs);
        return redirect()->back()->with('message',[__('admin.update_s'),'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $content->delete();
        return response()->json([
           'status'=>1,
        ]);
    }
}
