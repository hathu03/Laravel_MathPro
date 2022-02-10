<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json(['data' => $posts]);
    }

    public function store(Request $request)
    {
        $data = $request->only('used_id', 'content', 'image', 'status_id');
        $post = Post::create($data);
        return response()->json(['data' => $post, "success" => 'Thêm mới thành công']);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(["success" => "Xóa thành công"]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }

    public function edit(Request $request, $id)
    {
        $postAll = Post::findOrFail($id);
        $data = $request->only('user_id', 'content', 'image', 'status_id');
        $post = Post::update($data);
        return response()->json(["data" => $post, "oke" => $postAll]);
    }
}
