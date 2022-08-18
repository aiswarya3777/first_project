<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adding_controller extends Controller
{
    function add(Request $request){//Request is default format and $request is when submitt form the arduments come in $request
        $first_number = $request->first;//here "first is that input name"
        $second_number  = $request->second; //here "second is that input name"
        $result = $first_number + $second_number;
        return view('LARAVEL_CRUD/sum' ,['add_result' =>$result]);
    }
}
