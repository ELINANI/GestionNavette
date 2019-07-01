<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="cbon.css">
	<style type="text/css">
		.popup .log .ex h4 
{ 	padding: 0;
   color:#2C1718;
}
.popup .log .ex span 
{
        
	padding: 0;

   text-align: center;	
}
	</style>
</head>
<body>
	<?php 
	session_start();
	$user = $_SESSION['user'];
          $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd); 
          
       $id = $_GET['id'];
          $result1= mysqli_query($con,"select * from produit where num = '$id'");
           $result= mysqli_query($con,"select * from login where login = '$user'");
        $row1=mysqli_fetch_array($result1,MYSQLI_NUM);     
        $row=mysqli_fetch_array($result,MYSQLI_NUM); 

	?>
<header>
    
   <div class = "popup">
   	 <div class="log">
   	 	<h2>Facture</h2>
   	 
   	 	<div class="ex">
   	 	  <h4>Nom :</h4> 
   	 	  <span><?php echo "$row[0]"; ?></span>	
   	 	</div>
   	 	<div class="ex">
   	 	  <h4>Email :</h4> 
   	 	  <span><?php echo "$row[4]"; ?></span>	
   	 	</div>
   	 	<div class="ex">
   	 	  <h4>Ville Depart :</h4> 
   	 	  <span><?php echo "$row1[6]"; ?></span>	
   	 	</div>
   	 	<div class="ex">
   	 	  <h4>Ville d'Arriver :</h4> 
   	 	  <span><?php echo "$row1[7]"; ?></span>	
   	 	</div>
   	 	<div class="ex">
   	 	  <h4>Heure Depart :</h4> 
   	 	  <span><?php echo "$row1[8]"; ?></span>	
   	 	</div>
   	 	<div class="ex">
   	 	  <h4>Prix :</h4> 
   	 	  <span><?php echo "$row1[5]"; ?></span>	
   	 	</div>
         
                    
   	 </div>
   </div>

	
     




</header>
 </body>
</html>