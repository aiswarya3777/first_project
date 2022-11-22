<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apimodel;
use Exception;

class ApiController extends Controller
{
   function registration(Request $request){
    //here we decide the value of our_choice_name
    try{
        $name = $request->name; 
        $email = $request->email;
        $password = $request->password;
      
        $object = new ApiModel([
            'name' => $name,
            'email' => $email,
            'password' =>$password
        ]);
        $object->save();
        return response(['status_code' => '200']);
    }

    catch (Exception $ex) {
          return response(['error' => 'Something went wrong']);
    }
   

    // $name = $request->name; 
    // $email = $request->email; 
    // $password = $request->password;

   
   
   }
//for delete data using api
//$request = this is http request
   function delete_api(Request $request,$id){
    ApiModel::find($id)->delete();
   }

   //for update
   function api_update(Request $request,$id){
  
    $name = $request->name;
    $email = $request->email;
    $password = $request->password;
    //here we fin objectusing $id
    ApiModel::find($id)->update([
        'name'=>$name,
        'email' => $email,
        'password' => $password
    ]);
   }

   //for data retrive
   function data_retrive(){
   $data_from_db =  ApiModel::get();
   //we store the value in a variable then pass it as json data
    return response(['data' =>$data_from_db ]);
   }

   //one data retrive
   function one_data_retrive(Request $request,$id){
    //to get one data never use first or get
    $one_data = ApiModel::find($id);
    return response(['one_data'=>$one_data]);

   }
//checking name using like
   function checking_name(Request $request){
    $name = $request->input("name");// by using this we get search_name?name="Aiswarya"
    $email = $request->input("email");
    // $result = ApiModel::where('name', 'LIKE', '%'.$name.'%')->orWhere('email', 'LIKE', '%'.$email.'%')->get();
    
    //two condition must follow case
    $result = ApiModel::where('name', 'LIKE', '%'.$name.'%')->where('email', 'LIKE', '%'.$email.'%')->get();
    return response(['response'=>$result]);
    
   }
}
