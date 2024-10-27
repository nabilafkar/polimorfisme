<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->commentable_id = $request->input('commentable_id');
        $comment->commentable_type = $request->input('commentable_type');
        $comment->save();

        return redirect()->back()->with('message', 'Comment added successfully!');
    }
}
