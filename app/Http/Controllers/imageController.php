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
use DateTime;

class imageController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function home() {
        session()->regenerate();
        session(['id' => null]);
        return View('imageUpload/homeimage');
    }

    public function register() {

        return View('imageUpload/imageregister');
    }

    public function login() {
        session()->regenerate();
        if (session('id') !== null) {

            $user = DB::table('UserDetails')->select('Name', 'UserId')->where('UserId', session('id'))->get();
            foreach ($user as $value) {
                foreach ($value as $x => $y) {
                    if ($x == 'UserId') {
                        session(['id' => $y]);
                    }
                    if ($x == 'Name') {
                        $name1 = $y;
                    }
                }
            }
            return view("imageUpload/userLogin", array(
                "Name" => $name1
            ));
        }
        $LoginEmailAddress = Input::get('userEmail');
        $LoginPassword = Input::get('userPassword');
        $users = DB::table('UserDetails')->select('Name', 'UserId')->where('Email', $LoginEmailAddress)->where('Password', $LoginPassword)->get();

        if ($users) {
            foreach ($users as $value) {
                foreach ($value as $x => $y) {
                    if ($x == 'UserId') {
                        session(['id' => $y]);
                    }
                    if ($x == 'Name') {
                        $name = $y;
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
        if ($Insert == 1) {
            $validate = "Registration Complete successfully Please Login";
        } else {
            $validateError = "Could not register try again later";
        }

        return view('imageUpload/imageregister', array(
            'message' => $validate,
            'error' => $validateError
        ));
    }

    public function albums() {

        session()->regenerate();
        $UserId = session('id');
        $Album = DB::table('AlbumDetails')->select('Name', 'Desc')->where('UserId', session('id'))->get();
        return view('imageUpload/useralbum', array(
            'Album' => $Album
        ));
    }

    public function createalbum() {

        return view('imageUpload/usercreatealbum');
    }

    public function createalbumsubmit() {

        session()->regenerate();
        $UserId = session('id');
        $AlbumName = Input::get('albumName');
        $AlbumDesc = Input::get('albumDesc');
        $validate = null;
        $validateError = null;
        $dt = new DateTime();
        $Time = $dt->format('Y-m-d H:i:s');

        $Insert = DB::table('AlbumDetails')->insert(
                ['Name' => $AlbumName,
                    'Desc' => $AlbumDesc,
                    'UserId' => $UserId,
                    'Time' => $Time]
        );
        if ($Insert == 1) {
            $validate = "Album created successfully";
        } else {
            $validateError = "Could not create";
        }
        return view('imageUpload/usercreatealbum', array(
            'message' => $validate,
            'error' => $validateError
        ));
    }

    public function imageuploadview(){
        
        return view('imageUpload/imageuploadview');
    }
    public function hai() {
        $values = Usermodel::all()->where('UserId', 10);
        $array = $values->toArray();
        foreach ($array as $values) {
            foreach ($values as $x => $key) {
                echo $x, " ", $key;
            }
        }
    }

}

?>
