<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::whereParent_id(0)->get();
        return view('Admin.comments.all' , compact('comments'));
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
    public function store(CommentRequest $request)
    {
        $data = Comment::create($request->all());
        if($data)
        {
            return redirect()->back()->with('message',[__('admin.create_s'),'success']);
        }else{

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $answer = Comment::whereParent_id($comment->id)->first();
        return view('Admin.comments.show' , compact('comment','answer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $data = $comment->update($request->all());
        if($data)
        {
            return redirect()->back()->with('message',[__('admin.update_s'),'success']);
        }else{

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function ajax_get_answer(Request $request){
        $comment = Comment::whereParent_id($request->question_id)->first();
        if($comment){
            return response()->json([
                'text'=>$comment->text,
                'status'=>1,
            ]);
        }else{
            return response()->json([
                'status'=>0,
            ]);
        }
    }
}
