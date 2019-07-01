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
	<link rel="stylesheet" type="text/css" href="chois.css">
	<style type="text/css">

</style>
</head>
<body>
<header>
   
    		  <ul data-aos="fade-up" data-aos-delay="0"
          data-aos-duration="1000">
    		  	<li>
                    <a href="index_admin.php">
                     <span>Bus</span>
                     <span>Bus</span>
                   </a>
               </li>
    		  	<li><a href="gestion_clt.php">
                
                     <span>Client</span>
                     <span>Client</span>
                </a>
                </li>
    		  	<li><a href="gestion_reservation.php">
                     <span>Reservation</span>
                     <span>Reservation</span>
                </a></li>
    		  </ul>
    
    
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