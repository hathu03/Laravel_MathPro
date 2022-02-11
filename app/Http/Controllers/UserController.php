<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return response()->json(["data"=>$users, "success"=>true]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $data = $request->only("email","phone","password");
        $data["password"] = Hash::make($request->password);
        $user  = User::create($data);
        return response()->json(["data"=>$user, "success"=>true]);
    }


}
