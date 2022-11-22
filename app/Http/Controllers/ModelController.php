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
        // new_register this is model name
        $object = new new_register([//we are creating object here to pass the value
            'fname' => $fname,
            'lname' => $lname,
            'email' => $email,
            'password' =>$password
        ]);
        $object->save();
        return redirect('model_reg');
   }

   function data_retrive(){
    //new_register this is model name ,here our table is our model
    $data = new_register::get();//all data will get
    return view('LARAVEL_CRUD/model_reg_form',['data' => $data]);
    // print_r($data);
   }

   function delete($id){
    $delete_data = new_register::find($id)->delete();
    //another method to delete
    // $delete_data->delete();
    // echo $delete_data;
    return redirect('model_reg');

   }

   function update($id){
    $update_data = new_register::find($id);
    return view('LARAVEL_CRUD/update_model_method',['update_data' => $update_data]);
   }

   function update_data(Request $request , $id){
    $fname = $request->first;
    $lname = $request->last;
    $email = $request->email;
    $password = $request->password;
    new_register::find($id)->update([
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
        'password' => $password
    ]);
    
   
    return redirect('model_reg');
   }
}
