<?php
@include 'bd.php' or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tele - Découvrez les dernières collections</title>
	<link rel="icon" href="img/slide/14.png"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="re.css">
	<style type="text/css">
	

<?php
$url="127.0.0.1";
$bd="gest_tele";
$use="root";
$pwd="";
$con = mysqli_connect($url,$use,$pwd,$bd);
session_start(); 
if(isset($_SESSION['admin']))
{
	$log = $_SESSION['admin'];
    $resultat =mysqli_query($con,"select * from login where login = '$log'"); 
		$row=mysqli_fetch_array($resultat,MYSQLI_NUM);
}else
{
	header('REFRESH:.5,URL=index.php');
}
?>

</style>

</head>
<body>
<header>
<div class="popup">
    	<div class="log">
<h2>Ajouter</h2>
<form action="ajt1.php" method="POST">
	<div class="us">
		<input type="text" name="num" required="">
		<label>Num</label>
	</div>
	<div class="us">
		<input type="text" name="serie" required="">
		<label>Serie</label>
	</div>
	<div class="us">
		<input type="file" name="img" required="">
		<label>Image</label>
	</div>
	<div class="us">
		<input type="text" name="stock" required="">
		<label>Stock</label>
	</div>
	<div class="us">
		<input type="text" name="marque" required="">
		<label>Marque</label>
	</div>
	<div class="us">
		<input type="text" name="prix" required="">
		<label>Prix</label>
	</div>
    <button>Ajouter</button>


</form>
</div>
</div>
<div class="ident">
    	<nav>
    		<ul data-aos="fade-up" data-aos-delay="0"
    data-aos-duration="1000">
    			<a href="index.php">log out</a>
                 
                   <img src="img/login/<?php echo "$row[3]" ?>">
                   <label><?php echo "$row[0]"; ?></label>
                 
    			
    		</ul>
    		
    	</nav>
    </div>

    <div class="menu1">
    	<nav>
    		  <ul data-aos="fade-up" data-aos-delay="0"
    data-aos-duration="1000">
    		  	<li><a href="#">Home</a></li>
    		  	
              </ul>
    	</nav>
    </div>
</header>
<br><br><br><br>
<?php
       $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd);
       $resultat =mysqli_query($con,"select *from ligne_reservation"); 
		
     ?>
<div class="table-box" id="op">
	<table cellpadding="10"  data-aos="fade-up" data-aos-delay="0"
    data-aos-duration="1000">
		<tr>
			<th>Id Reservation</th>
			<th>Num Bus</th>
			<th>Prix</th>
			<th>Heure Arrive</th>
			<th>Supprimer</th>
         </tr>
         <?php while ($row=mysqli_fetch_array($resultat,MYSQLI_NUM)) {
     			
     		 ?>
         <tr>
         	<td><?php echo "$row[0]"; ?></td>
         	<td><?php echo "$row[1]"; ?></td>   <td><?php echo "$row[2]"; ?></td>
         	<td><?php echo "$row[3]"; ?></td>
         	
            <td>
         		<a href="<?php echo "del_res.php?id=".$row[0]."" ?>">Supprimer</a>
         	</td>   

         	
         </tr>
     <?php } ?>
	</table>
	 
</div>
<br><br><br><br>
<footer>
<ul class="sci">
	<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
	<li><a href="#"><i class="fab fa-twitter"></i></a></li>
	<li><a href="#"><i class="fab fa-instagram"></i></a></li>
	<li><a href="#"><i class="far fa-envelope"></i></a></li>
</ul>
<p class="cpryt">
	© Copyright 2019  Phone | Tous droits réservés|
</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script src="js/jquery.ripple.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('.icon').click(function(){
		$('.search').toggleClass('active')
		$('.menu1 nav ul li:first-of-type a').toggleClass('clear')
	});
	$('.ajout').click(function(){
		$('.popup').fadeIn();
	});
	$('.popup').click(function(){
		$(this).fadeOut();
	});
	$('.popup .log').click(function(e){
		e.stopPropagation();
	});
	/*$(function(){
		$("#target").ripple();
    })*/
   

})


</script>
</body>
</html>