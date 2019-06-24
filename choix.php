<?php
@include 'bd.php' or die(mysql_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Gestion Navette</title>
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
            background: url(img/slide/1111.jpg) 50% 50%;
            font-family: sans-serif;
	        width: 100%;
	        height: 100vh;
         	background-size: cover;
         	

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
	background-color: #DB0409;
	border-radius: 10px;
	color: white; 
	padding: 10px;
} 
.log button:hover
{
    border-color:white;
	background-color: #DB0409;
	text-shadow: 0 0 5px #DB0409;
	box-shadow: 0 0 40px #DB0409,inset 0 0 40px #DB0409;
	
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
.sec7:after
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
.sec7
{
	position: relative;
	background-image:url(img/slide/12.png);
	background-size: cover;
	height: 100vh; 
}
.sec7:before
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
.sec8:after
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
.sec8
{
	position: relative;
	background-image:url(img/slide/44.png);
	background-size: cover;
	height: 100vh; 
}
.sec10:after
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
.sec10
{
	position: relative;
	background-image:url(img/slide/2.png);
	background-size: cover;
	width: 100%;
	height: 100vh; 
}
.more1 
{
   margin-left: 10px;
}
.more1 img
{
   margin-left: 3.5%;
}
.about .abo .img
{
	position: relative;
	background-image:url(img/about/1.png);
	background-size: cover;
	height: 100vh; 
}
.about .abo .img:after
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
/*
.loader
{
	margin:15em 38em;
	border:16px solid #3A173F;
	border-radius: 50%;
	border-top: 16px solid red;
	width: 140px;
	height: 140px;
	animation: ss .8s linear infinite;
}
@keyframes ss
{
 0%{
 	transform: rotate(0deg);
 }
 100%{
 	transform: rotate(360deg);
 }
}*/ 

.containt{
	margin-left: 3%;
    margin-top: 8%; 
}
</style>
</head>
<body>
<header>
   <div class="menu1">
    	<nav>
    		  <ul data-aos="fade-up" data-aos-delay="0"
    data-aos-duration="1000">
    		  	<li><a href="index_admin.php">Bus</a></li>
    		  	<li><a href="gestion_clt.php">Client</a></li>
    		  	<li><a href="gestion_reservation.php">Reservation</a></li>
    		  </ul>
    	</nav>
    </div>
    
</header>
<br><br><br><br>
<?php
?>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
  <script>
    AOS.init();
  </script>
<script src="js/jquery.ripple.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
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
  /*  $(window).on('scroll',function(){
    	if(window).scrollTop()
    	{
    		$('.menu1').addClass('black');
    	}
    	else
    	{
            $('.menu1').removeClass('black');  
    	}
    })*/
   

})







</script>
</body>
</html>