<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;

class CommentController extends Controller
{
    //
	public function store(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->email = $request->name;
        $post = Blog::find($request->get('id'));
        $post->comments()->save($comment);

        return back();
    }
}
