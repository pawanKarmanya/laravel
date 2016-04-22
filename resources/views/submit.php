<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
           
if($_POST["message"]=="insert"){
    
    session_start();
    $data=$_POST["data"];
    $time=date("Y-m-d h:i:sa");
    $query="insert into exam (id, message, time)values('".$_SESSION["user"]."','$data','$time')";
    $result=mysqli_query($Link,$query);
    
    
}
if($_POST["message"]=="fetch"){
    
    $queryfetch="select * from exam";
    $resultfetch=  mysqli_query($Link, $queryfetch);
   while($row=  mysqli_fetch_assoc($resultfetch)){
       echo $row["id"]," says: ",$row["message"],"<br>";
   }
}


