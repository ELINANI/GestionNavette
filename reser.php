<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="ss.css">
</head>
<body>
	<?php 
	session_start();
 $user = $_SESSION['user'];
	?>
        <div class="popup">
    	<div class="log">
<h2>Ligne Reservation</h2>
<form action="res2.php" method="POST">
	<div class="us">
		<input type="text" name="Num"  value="<?php echo "$user";?>" required=""
		>
		<label>Num Client</label>
	</div>
	<div class="us">
		<input type="text" name="depart" required="">
		<label>Ville de depart</label>
	</div>
		<div class="us">
		<input type="text" name="arrive" required="" >
		<label>Ville d'arriver</label>
	</div>
		<div class="us">
		<input type="text" name="hd" required="">
		<label>Heure de depart</label>
	</div>
		<div class="us">
		<input type="text" name="ha" required="">
		<label>Heure d'arriver</label>
	</div>
	    <button>Suivant</button>


</form>
</div>
</div>


</body>
</html>