<style type="text/css">
	.l
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
.l h2
{
	margin: 0 0 30px;
	padding: 0;
	color: white;
  text-align: center;

}
.l .us 
{
	position: relative;
}
.l .us input
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
.l .us label
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
.l .us input:focus ~ label,
.l .us input:valid ~ label
{
	top: -26px;
	left: 0;
	color: #3A173F;
	font-size: 26px;
}
.l button
{
    border-color:white;
	background-color: #3A173F;
	border-radius: 10px;
	color: white; 
	padding: 10px;
} 

</style>
<div class="l">
<h2>Contact</h2>
<form action="index.php" method="POST">
	<div class="us">
		<input type="text" name="user" required="">
		<label>Username</label>
	</div>
	<div class="us">
		<input type="text" name="user" required="">
		<label>Name</label>
	</div>
	<div class="us">
		<input type="text" name="user" required="">
		<label>Email</label>
	</div>
	<div class="us">
		<input type="password" name="user" required="">
		<label>Password</label>
	
	
    <button>Envoyer</button>


</form>
</div>