<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>
           Cross Site Request Forgery  Protection
        </title>
    </head>
    <body>
        <div class="container">
            <div class="content">
             @if(isset($message))
       {{$message}}
       @endif
                <form action="{{ URL::route('csrf') }}" method="post">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       
               <input type="hidden" name="token" value="{{$value}}">
                <strong>A product</strong><br/>
       Quantity:: <input type="text" name='quantity'/><br/>
       <input type="hidden" name="product" value="1"/>
       <input type="submit" value="Order"/>
       
      </form>
            </div>
        </div>
    </body>
</html>
