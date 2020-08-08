<?php

namespace App\Http\Controllers\Admin;

use App\CategoryGallery;
use App\Gallery;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(32);
        return view('Admin.galleries.all',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums = CategoryGallery::all();
        return view('Admin.galleries.create',compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery = Gallery::create($request->all());
       if($gallery){
           return redirect()->back()->with('message',[__('admin.create_s'),'success']);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $albums = CategoryGallery::all();
        return view('Admin.galleries.edit',compact('gallery','albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $file = $request->file('file');
        $inputs = $request->all();
        if($file){
            if($request->type == 3){
                $file = $this->uploadSingleImage($request->file('file'),'gallery');
            }else{
                $file = $this->UploadVideoSound($request->file('file'),'gallery');
            }

        }else{
            $file = $gallery->file;
        }

        $gallery->update(array_merge($inputs,['file'=>$file]));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $status = $gallery->delete();

        return response()->json([
            'status'=>'staus',
        ]);

    }
    public function add_video()
    {
        $albums = CategoryGallery::all();
        return view('Admin.galleries.video',compact('albums'));
    }
    public function video_store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'file'=>'required',
            'category_gallery_id'=> 'required',
            'type'=> 'required',
        ]);
        $gallery = Gallery::create([
            'title'=>$request->title,
            'file'=>$request->file,
            'category_gallery_id'=>$request->category_gallery_id,
            'type'=>$request->type,
            'arrangement'=>convertPersianToEnglish($request->arrangement),
        ]);
        if($gallery){
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }
    }
}
