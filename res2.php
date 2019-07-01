<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="ss.css">
</head>
<body>
  <?php
      $depart = $_POST['depart'];
      $arrive =$_POST['arrive'];
      
      $hd = $_POST['hd'];
      
      $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd); 
       $resultat= mysqli_query($con,"select * from produit where ville_depart = '$depart' and ville_arriver = '$arrive' and HD = '$hd'");
      ?>


        <div class="popup">
    	<div class="log">
<h2>la navette qui vous plait !</h2>
      <div class="table-box">
      <table cellpadding="10">
        <tr>
          <th>N_Navette</th>
          <th>Serie</th> 
          
          
          <th>Prix</th>
          <th>Ville Depart</th>
          <th>Ville D'arriver</th>
          <th>Heure Depart</th>
          <th>Heure D'arriver</th>
          <th>Reserver</th>
        </tr>
        <?php while ($row=mysqli_fetch_array($resultat,MYSQLI_NUM)) {
          
         ?>
          <tr>
            <td><?php echo "$row[0]"; ?></td>
            <td><?php echo "$row[1]"; ?></td>
            
            <td><?php echo "$row[5]"; ?></td>
            <td><?php echo "$row[6]"; ?></td>
            <td><?php echo "$row[7]"; ?></td>
            <td><?php echo "$row[8]"; ?></td>
            <td><?php echo "$row[9]"; ?></td>
            
            <td>
              <a href="<?php echo "cbon.php?id=".$row[0]."" ?>">Reserver</a>            </td>
        </tr>
        <?php
          }


        ?>
         
      </table>

  </div>
 
	


</form>
</div>
</div>


</body>
</html>