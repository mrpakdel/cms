<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelManageController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->with('users')->get();
        return view('Admin.levelAdmins.all',compact('roles'));
    }

    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('Admin.levelAdmins.create',compact('users','roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'user_id'=>'required',
           'role_id'=>'required',
        ]);

        $user = User::find($request->input('user_id'))->roles()->sync($request->input('role_id'));
        if($user){
            return redirect()->back()->with("message",['It was successful',"success"]);
        }
    }

    public function edit(User $user)
    {
        $users = User::all();
        $roles = Role::all();
        return view('Admin.levelAdmins.edit',compact('roles','users','user'));
    }

    public function update(Request $request , User $user)
    {
        $user->roles()->sync($request->input('role_id'));
        return redirect()->back()->with('message',['It was successful','success']);
    }
}
