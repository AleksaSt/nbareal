<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $teamId){

        $request->validate([
            'content' => 'required'
        ]);

        Comment::create([
            'content' => $request['content'],
            'team_id' => $teamId,
            'user_id' => Auth::user()->id
        ]);

    }
}
