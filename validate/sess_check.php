<?php

session_start();

if($_SESSION['account']){
  
}else{
header("location:../index.php");
}



?>