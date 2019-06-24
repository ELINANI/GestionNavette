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
body
{
 background:rgba(0,0,0,.8); 
}

 </style>
       <?php
       $url="127.0.0.1";
       $bd="gest_tele";
       $use="root";
       $pwd="";
       $con = mysqli_connect($url,$use,$pwd,$bd); 
          
       $id = $_GET['id'];
       $result1= mysqli_query($con,"select * from produit where num = '$id'");
       $row=mysqli_fetch_array($result1,MYSQLI_NUM);
       ?>
               
     <div class="popup">
      <div class="log">
}
<h2>Modifier</h2>
<form action="edit2.php" method="POST">
  <div class="us">
    <input type="text" name="num" required="" value="<?php echo "$row[0]" ?>">
    <label>Num</label>
  </div>
  <div class="us">
    <input type="text" name="serie" required="" value="<?php echo "$row[1]" ?>">
    <label>Serie</label>
  </div>
  <div class="us">
    <input type="file" name="img"  value="<?php echo "$row[2]" ?>">
    <label>Image</label>
  </div>
  <div class="us">
    <input type="text" name="stock" required="" value="<?php echo "$row[3]" ?>">
    <label>Stock</label>
  </div>
  <div class="us">
    <input type="text" name="marque" required="" value="<?php echo "$row[4]" ?>">
    <label>Marque</label>
  </div>
  <div class="us">
    <input type="text" name="prix" required="" value="<?php echo "$row[5]" ?>">
    <label>Prix</label>
  </div>
    <button class="modi">Modifer</button>
</form>
</div>
</div>



