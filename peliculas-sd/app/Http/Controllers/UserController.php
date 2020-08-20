<?php
namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return response()->json($users, 200);
    }

    function showOneUser(Request $request, $id){
        $user = User::find($id);
        return response()->json($user, 200);
    }

    function createUser(Request $request){
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'remember_token' => $data['remember_token'],
            'api_token' => Str::random(60)
        ]);

        return response()->json($user, 201);
    }
}
