<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\User;

class Comment extends Model
{
    public function team(){

        return $this->belongsTo(Team::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
