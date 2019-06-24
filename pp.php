<?php
@include 'bd.php' or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>X24BFF - Découvrez les dernières collections</title>
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
            
            font-family: sans-serif;
	        width: 100%;
	        height: 100vh;
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

{
	border-bottom: 4px solid #3A173F;
}
.log button
{
    border-color:white;
	background-color: #3A173F;
	border-radius: 10px;
	color: white; 
	padding: 10px;
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



</style>
</head>
<body>
	<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$url="127.0.0.1";
	$bd="gest_tele";
	$use="root";
	$pwd="";
$con = mysqli_connect($url,$use,$pwd,$bd);
	session_start();
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	if(isset($user) && isset($pass))
	{
		$resultat =mysqli_query($con,"select * from login where login = '$user' and pwd = '$pass'"); 
		$row=mysqli_fetch_array($resultat,MYSQLI_NUM);
		if($row[2] == "admin")
		{
			$_SESSION['admin'] = $row[0];
            header('REFRESH:.5,URL=choix.php');
		}
		else
		{
			$_SESSION['user'] = $row[0];
            header('REFRESH:.5,URL=index_user.php');
		}

	}
	else
	{
		header('REFRESH:.5,URL=index.php');
	}
}else

{
  header('location:index.php');
}
?>

	
<header>
    

    <div class="ident">
    	<nav>
    		
    		<div class="search">
    	    <div class="icon"></div>
    	     <div class="form">
    	     	<form>
    	     		<input type="text" name="" placeholder=" What are you looking for ?">
    	     	</form>
    	     </div>
             </div>
    	</nav>
    </div>

    
</header>
<br><br><br><br>
<?php
?>
<section class="se1" id="ser">
  <div class="container">
       <div class="txtbx">
  	     <h1 data-aos="fade-up" data-aos-delay="0"
    data-aos-duration="1000">Bienvenu</h1>
             <p data-aos="fade-up" data-aos-delay="500"
    data-aos-duration="1000">
             	Il est tout nouveau, tout écran, tout puissant. Il renferme nos technologies les plus avancées dans un design complètement réinventé. Il va vous surprendre, vous impressionner, vous émerveiller.
             </p>
     </div>
     <br><br><br><br>
     <div class="art">
     	<ul>
     	     <li data-aos="fade-up" data-aos-delay="0"
    data-aos-duration="1000"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/tele/5.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div></li>
    <li data-aos="fade-up" data-aos-delay="500"
    data-aos-duration="1000"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/tele/5.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div></li>
  <li data-aos="fade-up" data-aos-delay="1000"
    data-aos-duration="1000"><div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/tele/5.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div></li>
</ul>
     </div>
  </div>
</section><br><br><br><br>
<section class="sec2" id="ff">
   <button data-aos="fade-up" data-aos-delay="0"
    data-aos-duration="1000">Read More</button>
</section><br><br><br><br>
<section class="mor" id="event">
	<h2>Share your best photos shot on iPhone</h2>
	<br><br>
	<div class="eve1">
		<ul>
			<li>
				<div class="card" style="width: 30rem;">
  <img class="card-img-top" src="img/even/1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Apple is kicking off 2019 by celebrating the most stunning photographs captured on iPhone, the world’s most popular camera, by inviting iPhone users to submit their best shots.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div></li>
			
			<li><div class="card" style="width: 30rem;">
  <img class="card-img-top" src="img/even/2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Phone XS, iPhone XS Max, and iPhone XR bring innovations to photography, from sophisticated portraits with an adjustable depth of field, to Smart HDR which leverages multiple technologies — like faster sensors, an enhanced ISP and advanced algorithms — to bring more highlight and shadow detail to photos.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div></li>
		</ul>
	</div>
	<div class="eve2">
		<ul>
			<li><div class="card" style="width: 30rem;">
  <img class="card-img-top" src="img/even/4.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Austin is an iPhone photographer, filmmaker and creative who’s traveled around the world and has worked with numerous non-profit organizations to help better cast their vision worldwide. Austin has published iPhone photography reviews in outlets including National Geographic and CNN over the years.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div>
</li>
			<li><div class="card" style="width: 30rem;">
  <img class="card-img-top" src="img/even/3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Photographers around the world are capturing stunning images with iPhone XR, the newest member of the iPhone family. iPhone XR features an Apple-designed, state-of-the-art camera system that enables Portrait mode from a single lens, offering a sophisticated bokeh effect. Portraits look great on the wide-angle lens, even in lower lighting conditions.</p>
    <a href="#" class="btn btn-dark">Go somewhere</a>
  </div>
</div></li>
		</ul>
	</div>
</section><br><br><br><br>
<section class="vid">
	
		<iframe width="90%" height="450" src="https://www.youtube.com/embed/9m_K2Yg7wGQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	
</section><br><br><br><br>
<section class="Contacte" id="contac">
	<div class="boxx">
		<h2>Contact</h2>
		<form>
			<div class="inputboxx">
				<input type="text" name="" required="">
				<label>Username</label>
			</div>
				<div class="inputboxx">
				<input type="text" name="" required="">
				<label>Username</label>
			</div>
				<div class="inputboxx">
				<input type="text" name="" required="">
				<label>Username</label>
			</div>
				<div class="inputboxx">
				<input type="text" name="" required="">
				<label>Username</label>
			</div>
			<h4> your Comment</h4>
				<div class="inputboxx">
				<textarea rows="6" cols="60">
				</textarea>
				
			</div>
           <input type="submit" name="" value="Envoyer">
		</form>
	</div>
</section><br><br><br><br>
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
	$('.login').click(function(){
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