<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request){
        $user = User::where(['email' => $request->email])->first();
        if($user && Hash::check($request->password, $user->password)){
            $request->session()->put("user",$user);
            return redirect("/");
        }
        
        return "Username and password is not matched.";       
    }

    function logout(){
        Session::forget("user");
        return redirect("../login");
    }

    function registerUser(Request $req){
        $newUser = new User();
        $newUser->name = $req->input("username");
        $newUser->email = $req->input("email");
        $newUser->password = Hash::make($req->input("password"));
        $newUser->save();
        return redirect("login");
    }
}
