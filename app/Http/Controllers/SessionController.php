<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

    public function index(){
        return view('auth.session');
    }

    public function store(Request $reques){
        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'The email or password doesn\'t match'
            ]);
        }
        return redirect()->to('/home');
    }

    public function create(){
        return view('auth.create');
    }

    public function register(){
        $user = User::create(request(['name','username','email','password']));
        auth()->login($user);
        return redirect()->to('/home');
    }
}
