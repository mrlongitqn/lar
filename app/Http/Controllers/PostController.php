<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function Add(){
        return view('Post.Add');
    }
    function Save(Request $request){
        echo 'id gởi qua là: '. $request->category_id;
    }
}
