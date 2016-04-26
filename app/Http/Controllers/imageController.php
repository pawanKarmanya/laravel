<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Redirect;
use App\Usermodel;
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

    public function home() {
        
        return View('imageUpload/homeimage');
    }

    public function register() {

        return View('imageUpload/imageregister');
    }

    public function login() {
        session()->regenerate();
        if(session('id')!==null){
        
            $user = DB::table('UserDetails')->select('Name','UserId')->where('UserId', session('id'))->get();
       foreach($user as $value){
                foreach($value as $x=>$y){
                    if($x=='UserId'){
                       session(['id'=>$y]);
                    }
                    if($x=='Name'){
                        $name1=$y;
                    }
                }
            }
            return view("imageUpload/userLogin", array(
                "Name" => $name1
           ));
        }
        $LoginEmailAddress = Input::get('userEmail');
        $LoginPassword = Input::get('userPassword');
        $users = DB::table('UserDetails')->select('Name','UserId')->where('Email', $LoginEmailAddress)->where('Password', $LoginPassword)->get();
        
        if ($users) {
            foreach($users as $value){
                foreach($value as $x=>$y){
                    if($x=='UserId'){
                       session(['id'=>$y]);
                    }
                    if($x=='Name'){
                        $name=$y;
                    }
                }
            }
            
          return view("imageUpload/userLogin", array(
             "Name" => $name
            ));
        } else {
            return View('imageUpload/homeimage', array(
                'errorLogin' => 'UserName or Password Incorrect'
            ));
        }
    }

    public function registersubmit() {
        $FirstName = Input::get('firstName');
        $EmailAddress = Input::get('emailAddress');
        $Password = Input::get('password');
        $validateError = null;
        $validate = null;
        $Insert = DB::table('UserDetails')->insert(
                ['Name' => $FirstName,
                    'Email' => $EmailAddress,
                    'Password' => $Password]
        );
        if ($Insert == 0) {
            $validate = "Registration Complete successfully Please Login";
        } else {
            $validateError = "Could not register try again later";
        }

        return view('imageUpload/imageregister', array(
            'message' => $validate,
            'error' => $validateError
        ));
    }
    public function hai(){
        $values = Usermodel::all()->where('UserId', 10);
       $array= $values->toArray();
       foreach ($array as $values)
       {
           foreach ($values as$x=> $key){
               echo $x," ",$key;
           }
       }
    }

}

?>
