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
        $comment->email = $request->email;
        $post = Blog::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->comment = $request->comment;
        $reply->name = $request->name;
        $reply->email = $request->email;
        $reply->parent_id = $request->get('comment_id');
        $post = Blog::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();

    }
}
