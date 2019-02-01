<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;
use App\Http\Resources\Comment as CommentResource;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($recipe)
    {
        $comments = Comment::where('recipe', $recipe)->orderBy('created_at', 'desc')->paginate(5);

        return CommentResource::collection($comments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = $request->isMethod('put') ? Comment::findOrFail($request->comment_id) : new Comment;
        $comment->id = $request->input('comment_id');
        $comment->recipe = $request->isMethod('put') ? $comment->recipe : $request->input('recipe');
        $comment->uid = $request->input('uid');
        $comment->message = $request->input('message');

        if($comment->save()){
            return new CommentResource($comment);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);

        return new CommentResource($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        if($comment->delete()){
            return new CommentResource($comment);
        }
    }
}
