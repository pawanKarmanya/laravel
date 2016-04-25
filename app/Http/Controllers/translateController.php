<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Redirect;

use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;


class translateController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    
    public function  translate(){
        session_start();
if(isset($_GET["lang"])){
    
    if($_GET["lang"]=="english"){
        $_SESSION['lang']="english";
    }
    if($_GET["lang"]=="spanish"){
        $_SESSION['lang']="spanish";
    }
    if($_GET["lang"]=="telugu"){
        $_SESSION['lang']="telugu";
    }
}
else{
    
    $_SESSION['lang']="english";

    }

@include $_SESSION['lang'].'.php';

        return view('translatepage');
    }
       

}
?>
