<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(["success" => "Xóa thành công"]);
    }

//    public function edit(Request $request, $id)
//    {
//        $data = $request->only("email","password","fullname","address", "phone","hobby", "birthday", "role");
//        $user = User::findOrFail($id);
//        $user->update($data);
//        return response()->json(["data" => $user]);
//    }
}
