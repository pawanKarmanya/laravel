<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\model\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
class homeController extends Controller
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function multiple(){
        
        return view('multiple/multiplefileupload');
        
    }
    
    public function filesubmit(){
        $filename=null;
        $x=0;
        $validate=null;
        $message=null;
        $file = Input::file('file');
      $path="uploads/multipleuploads/";
        foreach($file as $value){
           
               $filename[$x]=$value->getClientOriginalName();
               $validate=$value->move($path, $filename[$x]);
           $x++;
       }
       if($validate){
           $message='uploaded successfully';
       }
      else{
          $message='file could not be uploaded try again';
      }
    return view('multiple/multiplefileupload',['message'=>$message]);
    }
    
    
    public function replaceview(){
    
        return view('replacetext/replaceview');
    }
    public function replace(){
        
        
         $replace=Input::get('replace');
       $find=Input::get('find');
     $message=Input::get('text');
          $find_explode=explode(',',$find);
           $replace_explode=explode(',',$replace);
   for($x=0;$x<count($find_explode);++$x){
       
        $find_explo[$x]="/".trim($find_explode[$x])."/";
   } 
   // $replace=(empty($replace)==false)?  preg_split('/,\s+/', $input['replace']):"";
  //$text=(empty($find)===FALSE && empty($replace)===FALSE)? str_replace($find, $replace,$input['text']):$input['text'];
  $text=  preg_replace($find_explo, $replace_explode, $message);
     return view('replacetext/replaceview',['text'=>$text]);
   
        
    }
    
}
