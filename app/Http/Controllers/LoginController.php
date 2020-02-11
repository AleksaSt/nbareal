<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function __construct(){

        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create(){

        return view('login');
    }

    public function store(LoginRequest $request){

        if(!auth()->attempt(request(['email', 'password']))){

            return back()->withErrors(['message' => 'Bad credentials nigga']);

        }else{

            return redirect('/');
        }
    }

    public function destroy(){

        auth()->logout();

        return redirect('/');
    }
}
