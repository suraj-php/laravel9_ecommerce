<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $req) {
        $user = User::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password)) {
            return "Email or password is incorrect, Please try again.";
        }
        else {
            $req->session()->put('user', $user);
            return redirect('/');
            
        }
    }
}
