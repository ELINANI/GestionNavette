<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	

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
.log .us input[type="file"]
{
	border-color:white;
	background-color: #DB0409;
	border-radius: 10px;
	color: white; 
	padding: 10px;
	margin-top: 35px;
}
</style>
<body>


	    <div class="popup">
    	<div class="log">
 <h2>Ajout</h2>
<form action="ajt_clt.php" method="POST">
	<div class="us">
		<input type="text" name="user" required="">
		<label>Username</label>
	</div>
	<div class="us">
		<input type="password" name="pass" required="">
		<label>Password</label>
	</div>
	<div class="us">
		<input type="file" name="img" required="">
		<label>Image</label>
	</div>
	<div class="us">
		<input type="text" name="email" required="">
		<label>Email</label>
	</div>
    <button>Ajouter</button>


</form>
</div>
</div>

</body>
</html>