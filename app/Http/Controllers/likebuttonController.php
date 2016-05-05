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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Usermodel;
class likebuttonController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function likebutton($name) {

        
       $article=DB::table('likes')->get();
       $user=DB::table('userlikes')->where('name',$name)->get();
       $userarray=json_decode(json_encode($user),true);
       $articlearray=  json_decode(json_encode($article),true);
       
       return view('likebutton/like', ['article' => $articlearray, 'user' => $userarray]);
       
    }

    public function like() {
        
        
    }

}

?>
