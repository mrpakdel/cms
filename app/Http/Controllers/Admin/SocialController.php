<?php

namespace App\Http\Controllers\Admin;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::all();
        return view('Admin.socials.all',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $images = $request->file('logo');
        if($images){
            $logo = $this->uploadImages($request->file('logo'),'social');
            $social = Social::create(array_merge($request->all(),['logo'=>$logo]));
        }else{
            $social = Social::create($request->all());
        }

        if($social){
            return redirect()->back()->with(['message',['successfully','success']]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        return view('Admin.socials.edit' ,compact('social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $file = $request->file('logo');
        $inputs = $request->all();
        if($file){
            $inputs['logo'] = $this->uploadImages($request->file('logo'),'social');
        }else{
            $inputs['logo'] = $social->logo;
            $inputs['logo']['thumb'] = $inputs['imagesThumb'];
        }
        unset($inputs['imagesThumb']);
        $social->update($inputs);
        return redirect()->back()->with('message',["update successfully",'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        //
    }
}
