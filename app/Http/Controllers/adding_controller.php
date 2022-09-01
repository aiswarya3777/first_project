<?php

namespace App\Http\Controllers;

use DB;//here we include db
use Illuminate\Http\Request;

class adding_controller extends Controller
{
    function add(Request $request){//Request is default format and $request is when submitt form the arguments come in $request
        $first_number = $request->first;//here "first is that input name"
        $second_number  = $request->second; //here "second is that input name"
        $result = $first_number + $second_number;
        return view('LARAVEL_CRUD/sum' ,['add_result' =>$result]);
    }

    //regiter
    function register(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $password = $request->password;
        //insert data to db
        DB::table('register')->insert([
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email,
            'password' => $password
        ]);

        return view('LARAVEL_CRUD/register_form');

    }
//this is to retrive data from db so we use get() method
//and return the detials to the detail page
//['details' => $data_from_db] = data returning to detial page here 'detils' is our choice this is key name
    function data_retrive(){
        $data_from_db = DB::table("register")->get();
        return view('LARAVEL_CRUD/register_details' ,['details' => $data_from_db]);
    }
//delete functon
//for delete we use get method
    function deletedb($id){
        DB::table("register")->where('id',$id)->delete();
        return redirect('details');
    }

//update
//first() this is aggregate function
function update($id){
    $update_details = DB::table("register")->where('id',$id)->first();
    return view('LARAVEL_CRUD/update',['update_data' => $update_details]);
}

//this function works when update button clicks
function button_update_click(Request $request , $id){
    $fname = $request->first;
    $lname = $request->last;
    $email = $request->email;
    $password = $request->password;
    DB::table("register")->where('id',$id)->update([
        'first_name' => $fname,
        'last_name' => $lname,
        'email' => $email,
        'password' => $password
    ]);
    return redirect('details');
}

//login function
function login(Request $request){
    $email = $request->email;
    $password = $request->password;
    $mail_data = DB::table("register")->where('email',$email)->first();
    // return view('LARAVEL_CRUD/login',['login_email' => $mail_data]);
    if(is_null($mail_data)){
        $message = 'no mail in db';
        return view('LARAVEL_CRUD/login',['mail_message' => $message]);
    }elseif($email == $mail_data->email && $password == $mail_data->password){
            $request->session()->put('session_name',$mail_data->id);//here sesion starts
            return redirect('details');//when we give reirect url name should be used
        
    }else{
        $message = 'incorrect password'; 
        return view('LARAVEL_CRUD/login',['mail_message' => $message]);
    }
   
}

//function for logout
function logout(){
    session()->forget('session_name');
    // session()->flush(); complete history will remove
    return redirect('login_crud');
}

function profile(Request $request){
    if(session()->has('session_name')){
        $profile = $request->session()->get('session_name');//to fetch session id
        $profile_data = DB::table('register')->where('id',$profile)->first();//will  get array of that fetch details
        return view('LARAVEL_CRUD/profile',['profile' => $profile_data]);
     
    }else{
        echo "no session";
    }
   
}

//upload image
function upload(Request $request){
    $name = $request->name;
    $email = $request->email;
    //first we set the name of the image
    //here img_name is our choice
    //getClientOriginalExtension() this to extension
    $image = 'img_name'.time().'.'.$request->profile->getClientOriginalExtension();
    //storeAs() to store image in the folder
   $request->profile->storeAs('public/upload_images',$image);
   DB::table("fileupload")->insert([
    'name' => $name,
    'email' => $email,
    'image' => $image
   ]);
//    return view('LARAVEL_CRUD/file_upload',['msg' => 'File uploaded']);
   return redirect('file_upload');

}

//retrive upload data
function upload_retrive(){
    $data = DB::table("fileupload")->get();
    return view('LARAVEL_CRUD/file_upload',['details' => $data]);
}
}

