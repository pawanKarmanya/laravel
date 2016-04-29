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

class counterController extends Controller {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function home() {
        $filename = 'counter.txt';

        $current_value = (File::exists($filename)) ? File::get($filename) : 0;

        File::put('counter.txt', ++$current_value);

        return View('Counter', ['current_value1' => $current_value]);
    }

    public function spellchecker() {

        return view('spellchecker/homeimage');
    }

    public function checkspelling() {

        $word = Input::get('word');
        $result=null;
        $result2=null;
        $success=0;
        $letter=  substr($word, 0,1);
        $spelling = DB::table('english')->where("word", "like", $letter . "%")->get();

        foreach ($spelling as $Values) {
            foreach ($Values as $value => $key) {
                similar_text($word,$key, $percent);
      if($percent>70){
           $result.="<li>".$key."</li>";
        
      }
      if($percent>90){
          $success=1;
          $result2="<li>".$key."</li>";
      }
            }
        }
        if($success==0){
            echo $result;
        }
        else{
            echo $result2;
        }
        
    }

}

?>
