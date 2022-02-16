<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function getCommentById($id)
    {
        $blogId = Post::with("user")->find($id);
        $comments = Comment::with("user", "post")->where("blog_id", "=", $blogId->id)->orderBy("created_at", "DESC")->get();
        return response()->json($comments);
    }

    public function store(Request $request)
    {
        $data = $request->only("content", 'blog_id', "user_id");
        $comment = Comment::query()->create($data);
        return response()->json($comment);
    }
}
