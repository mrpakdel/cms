<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $setting = Setting::first();
        $socials = Social::all();
        return view('Admin.settings.all',compact('setting','socials'));
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
        if($request->file('logo')){
            $logo=  $this->uploadSingleImage($request->file('logo'),'setting');
            array_merge($request->all(),['logo'=>$logo]);
        }
        if($request->file('faveicon')){

            $faveicon=  $this->uploadSingleImage($request->file('faveicon'),'setting');
            array_merge($request->all(),['faveicon'=>$faveicon]);
        }

        $setting = Setting::create($request->all());
        if($setting){
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $inputs = $request->all();
        if($request->file('logo')){
            $logo=  $this->uploadSingleImage($request->file('logo'),'setting');
            //array_merge($inputs,['logo'=>$logo[0]]);
        }else{
            $logo = $setting->logo;
        }

        if($request->file('favicon')){

           $favicon=  $this->uploadSingleImage($request->file('favicon'),'setting');
        }else{
            $favicon = $setting->favicon;
        }

        if($request->image){

        }else{
            $request->image = $setting->image;
        }
        $setting->update([
            'site_name'=>$request->site_name,
            'location'=>$request->location,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'mobile'=>$request->mobile,
            'fax'=>$request->fax,
            'address'=>$request->address,
            'keyword'=>$request->keyword,
            'description'=>$request->meta_description,
            'logo'=>$logo,
            'image'=>$request->image,
            'favicon'=>$favicon,
        ]);
        return redirect()->back()->with('message',['update successfully','success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
