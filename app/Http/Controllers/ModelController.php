<?php

namespace App\Http\Controllers;
use App\Models\new_register; //we using this model here

use Illuminate\Http\Request;

class ModelController extends Controller
{
   function reg_insert(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $password = $request->password;
        //insert this data to model

        $object = new new_register([//we are creating object here to pass the value
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'password' =>$password
        ]);
        $object->save();
   }
}
