<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Redirect;

use File;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;


class imageController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    
    public function  home(){
        
        return View('imageUpload/homeimage');
    }
    public function  register(){
        
        return View('imageUpload/imageregister');
    }
       public function login(){
           
           $LoginEmailAddress=Input::get('userEmail');
           $LoginPassword=Input::get('userPassword');
           $validateError=null;
           $validate=null;
           $users = DB::table('UserDetails')->where('Email', $LoginEmailAddress)->where('Password', $LoginPassword)->get();
           if($users){
               return view("imageUpload/userLogin",array(
                   "Details"=>$users
               ));
           }
           else{
                return View('imageUpload/homeimage',array(
                    'errorLogin'=>'UserName or Password Incorrect'
                ));
           }
            
       }
       public function registersubmit(){
           $FirstName=Input::get('firstName');
           $EmailAddress=Input::get('emailAddress');
           $Password=Input::get('password');
           $validateError=null;
           $validate=null;
        $Insert=  DB::table('UserDetails')->insert(
    ['Name' => $FirstName,
    'Email' => $EmailAddress,
    'Password' => $Password]
);
        if($Insert==0){
         $validate="Registration Complete successfully Please Login";   
        }
        else{
             $validateError="Could not register try again later";
        }
        
        return view('imageUpload/imageregister', array(
            'message'=>$validate,
            'error'=>$validateError
        ));
       }

}
?>
