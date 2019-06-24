<?php
$url="127.0.0.1";
$bd="gest_tele";
$use="root";
$pwd="";
$con = mysqli_connect($url,$use,$pwd,$bd);
session_start();
$_SESSION['con']=$con;
