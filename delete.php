<?php
       $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd); 
            
       $id = $_GET['id'];
       
       $result = mysqli_query($con, "delete from produit where num='$id'");
 header("Location:index_admin.php#op");
  
     ?>