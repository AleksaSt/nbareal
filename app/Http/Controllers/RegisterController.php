<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;

class RegisterController extends Controller
{
    public function __construct(){

        $this->middleware('guest');
    }

    public function create(){

        return view('register');
    }

    public function store(RegisterRequest $request){

        $user = User::create($request->all());
        $user['password'] = bcrypt($user['password']);
        $user->save();
        return redirect('/');
    }
}
