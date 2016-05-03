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
    public function example($user){
        return "it worked ".$user;
        
    }
    public function likebutton(){
        
        return view('likebutton/like');
        
    }
    public function values(){
        
        echo 'hello';
    }
    
   public function temp(){
       
       return view('temp');
   }
public function temperature(){
    
    echo 'hai';
}
public function guest(){
    
    $array=DB::table('guestbook')->get();
    return view('guestbook/guestbook',['array'=>$array]);
}

public function guestsubmit(){
    
    $name=Input::get('name');
    $email=Input::get('email');
    $message=Input::get('message');
    $query=DB::table('guestbook')->insert(['name'=>$name, 'email'=>$email,'message'=>$message]);
    return Redirect::Route('guestbook');
}

public function shout(){
    
    $array=DB::table('shoutbox')->get();
    return view('shoutbox/shoutbox',['array'=>$array]);
}
public function shoutboxsubmit(){
    
    
    $name=Input::get('name');
    $message=Input::get('message');
    $query=DB::table('shoutbox')->insert(['name'=>$name,'message'=>$message]);
    return Redirect::Route('shoutbox');
}

}

?>
