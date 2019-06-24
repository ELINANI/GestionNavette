<?php
       $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd); 
            
       $id = $_GET['id'];
       
       $result = mysqli_query($con, "delete from login where login='$id'");
 header("Location:gestion_clt.php#op");
  
     ?>