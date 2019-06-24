<?php 
       $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd);

class presonne 
{
	private $login;
	private $pwd;
	private $type;
	private $image;
	private $email;
	 public function __construct($login,$pwd,$type,$image,$email)
	{
		$this->$login$=$login;
		$this->$pwd=$pwd;
		$this->$type=$type;
		$this->$image=$image;
		$this->$email=$email;
	} 
	public function  get_pwd()
	{
		return $this->pwd;
	}
	public __construct()
	{

	}
	public function ajout_presonne($per)
	{
      if(isset($per))
      {
      	echo "personne invalide";
      	return;
      }
      else
      {
      	try{
      	    if(strlen($per->get_pwd())>8)
      	    {
      	    	$res = mysqli_query($con,"insert into login values('$per->login','$per->pwd','$per->type','$per->image','$per->email')");
      	    	header("location:index_admin.php#op");

      	    }
      	}catch( exception $e)
      	{
          echo "$e->get_message()";
      	}
      }
	}

	public function  supp_pers($per)
	{
		if(isset($per))
		{
			echo "personne invalide";
      	    return;
		}
		else
		{
			try {
				$res = mysqli_query($con,"delelte from login where login ='$per->login'");
				header("location:index_admin.php#op");
			} catch (Exception $e) {
				echo "$e->get_message()";
			}
		}
	}

      public function  supp_pers($per)
	{
		if(isset($per))
		{
			echo "personne invalide";
      	    return;
		}
		else
		{
			try {
				$res = mysqli_query($con,"update login set pwd='$per->$pwd',type ='$per->$type',image ='$per->$image',email='$per->$image' where login = '$per->$login'");
				header("location:index_admin.php#op");
			} catch (Exception $e) {
				echo "$e->get_message()";
			}
		}
	}

	public function consulter_per()
	{
		echo "<table>";
		echo "<tr>";
		echo "<td>Login</td>";
		echo "<td>Password</td>";
		echo "<td>Type</td>";
		echo "<td>Image</td>";
		echo "<td>Email</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td><?php echo "$this->$login"?></td>";
		echo "<td><?php echo "$this->$pwd"?></td>";
		echo "<td><?php echo "$this->$type"?></td>";
		echo "<td><?php echo "$this->$image"?></td>";
		echo "<td><?php echo "$this->$email"?></td>";
		echo "</tr>";
		echo "</table>";
	}
}