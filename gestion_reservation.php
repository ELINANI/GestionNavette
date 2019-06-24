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
	<style type="text/css">
	html,body
{
	margin: 0px;
	padding: 0px;
	width: 100%;
}
		header
		{
		margin-bottom: 10px;
            background: url(img/slide/1444.png) 50% 50%;
            font-family: sans-serif;
	        
         	background-size: cover;
         	z-index: 100000000;

         }

.ident .search
{
	position: absolute;
	top: 0;
	right: 0;
	width: 40px;
	height: 40px;
	background:#fff;
	transition: all .5s ease-in-out;
}
.ident .search .icon
{
	width: 40px;
	height: 40px;
	line-height: 40px;
	font-size: 20px;
    color:#3A173F;
    text-align: center;
    position: absolute;
    top: 0;
    right: 0;
    cursor: pointer;
}
.ident .search .icon:before
{
	content: '\f002';
	font-family: fontAwesome;

}
.ident .search.active .icon:before
{
	content: '\f00d';
	font-family: fontAwesome;

}
.ident .search.active
{
	width: 100vw;
	height: 100vh;

}
 .ident .search .form
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
    display: none;
}
.ident .search .form input
{
	background:transparent;
	color:#3A173F;
	border:none;
	border-bottom: 4px solid #3A173F;
	outline:none;
	font-size: 40px;
	padding: 10px 0;
}
.ident .search.active .form
{
	display: block;
}
/*start login */
.log
{
	position: absolute;
	top: 50%;
	left: 50%;
	transform:translate(-50%,-50%);
	width: 400px;
	padding: 40px;
	background:rgba(0,0,0,.8);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.5);
	border-radius: 10px;
}
.log h2
{
	margin: 0 0 30px;
	padding: 0;
	color: white;
  text-align: center;

}
.log .us 
{
	position: relative;
}
.log .us input
{
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: #fff;
	margin-bottom: 30px;
	border:none;
	border-bottom: 1px solid #fff;
	outline: none;
    background:transparent;
}
.log .us label
{
	position: absolute;
	top: 0;
	left: 0;
	padding: 10px 0;
	font-size: 16px;
	color: #fff;
	pointer-events: none;
	transition: all .5s ease-in-out;
}
.log .us input:focus ~ label,
.log .us input:valid ~ label
{
	top: -26px;
	left: 0;
	color: #3A173F;
	font-size: 26px;
}
.log .us label:nth-of-type(3)
{
	margin-bottom: 10px;
}
{
	border-bottom: 4px solid #3A173F;
}
.log .us input[type="file"]
{
	border-color:white;
	background-color: #3A173F;
	border-radius: 10px;
	color: white; 
	padding: 10px;
	margin-top: 35px;
}
.log button
{
    border-color:white;
	background-color: #3A173F;
	border-radius: 10px;
	color: white; 
	padding: 10px;
} 
.log button:hover
{
    border-color:white;
	background-color: #3A173F;
	text-shadow: 0 0 5px #3A173F;
box-shadow: 0 0 40px #3A173F,inset 0 0 40px #3A173F;
}	
/* end login*/
/* start pop up*/
.popup
{
	position: fixed;
	top:0;
	left:0;
	width: 100vw;
	height: 100vh;
	background:rgba(0,0,0,.5);
	display: none;
}

/* end pop up*/
/*.sec2:before
{
	content: '';
	position: absolute;
	top:0;
	left: 0;
	width: 100%;
	height: 400px;
	background:linear-gradient(#000,transparent);
	pointer-events: none;

}*/
.sec2:after
{
	content: '';
	position: absolute;
	top:0;
	left: 0;
	width: 100%;
	height: 400px;
	background:linear-gradient(#000,transparent);
	pointer-events: none;

}
.sec2
{
	position: relative;
	background-image:url(img/slide/1.png);
	background-size: cover;
	height: 100vh; 
}
.ident nav ul  a  
{
	background-color: #DB0409;
	text-decoration: none;
	height: 35px;
    border-radius: 10px;
    color: white;
    padding: 10px;
    transition: all 1s ease-in-out;
}
.ident nav ul  a:hover
{
	border-color: #3A173F;
    background-color: white;
    border-radius: 10px;
    color: #3A173F;
    padding: 10px;	
} 
.ident nav ul  img
{
	width: 20%;
}
.ident nav ul  label
{
	color: #fff;
}

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