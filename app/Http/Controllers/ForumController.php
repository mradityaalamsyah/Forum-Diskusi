<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function ShowComment($id){

        return view('ForumUser.comment',['id'=>$id]);
    }
}
