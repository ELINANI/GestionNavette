<?php
       $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd);
       $num=$_POST["num"]; 
       $seri=$_POST["serie"]; 
       $img=$_POST["img"]; 
       $stock=$_POST["stock"]; 
       $mrq=$_POST["marque"]; 
       $prix=$_POST["prix"];

$res= mysqli_query($con,"update produit set serie = '$seri', img = '$img', marque = '$mrq', stock = '$stock', prix = '$prix' where num = $num");

       header("location:index_admin.php#op");
?>
