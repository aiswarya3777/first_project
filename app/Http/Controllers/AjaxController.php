<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;

class AjaxController extends Controller
{
    function first_ajax(Request $request){
        $name = $request->get_name;
        $email = $request->get_email;
        $password = $request->get_password;

        DB::table('ajax')->insert([
            'name' => $name,
            'email' => $email,
            'password' =>$password
        ]);

        
    }
// checking the given value in database using ajax
    function check_name_ajax(Request $request){
        $checing_name = $request->name_checking;
        $data_name_checking = DB::table('ajax')->where('name',$checing_name)->first();
        if(is_null($data_name_checking)){
            return Response::json(array('success' => true , 'message' => 'user name available'));
        }else{
            return Response::json(array('success' => true , 'message' => 'user name already taken'));
        }
    }

    function data_from_db(){
        $data_retrive = DB::table("ajax")->get();// here we get all data then we pass the value to ajax using response
        return Response::json(array('datas' => $data_retrive));//pass the value to blade ajax
    }

    function delete_from_ajax_table(Request $request){
        $delete_data = $request->delete_id;//delete_id this is the value that we pass from ajax function
        DB::table("ajax")->where('id',$delete_data)->delete();

    }

    function update_from_ajax_table(Request $request){
        $update_id = $request->update_id;
       DB::table("ajax")->where('id',$update_id)->first();

    }



    ///Study posting
    function study_post(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        DB::table("study_ajax")->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]); 
    }
    ///data retrivefirst_ajax

    function study_data_retrive(){
        $data_get = DB::table("study_ajax")->get();
        return Response::json(array('data_from_db' => $data_get)); 
    }

    //delete data
    function data_delete(Request $request){
        $id = $request->data_id;
        DB::table("study_ajax")->where('id',$id)->delete();
    }

    //update
    function update_data(Request $request){
        $id = $request->update_id;
        $update = DB::table("study_ajax")->where('id',$id)->first();
        return Response::json(array('update_data' => $update));
    }

    //updating data
    function updated_data_function(Request $request){
        echo "hiii";
        $id = $request->updated_id;
        $name = $request->get_name;
        $email = $request->get_email;
        $password = $request->get_password;
      
        DB::table("study_ajax")->where('id',$id)->update([
           'name' => $name,
           'email' => $email,
            'password' => $password

        ]);
    }
}
