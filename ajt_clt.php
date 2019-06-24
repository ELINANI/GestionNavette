<?php
    
       $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd);
       $user=$_POST["user"]; 
       $image=$_POST["img"]; 
       $email=$_POST["email"]; 
       $pass=$_POST["pass"]; 
       
    $res= mysqli_query($con,"insert into login values(' $user','$pass','client','$image','$email')");
       header("location:index.php#home");
?>