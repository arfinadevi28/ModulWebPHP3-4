<?php
function do_login($nama , $pass){
  if($nama != "DEVI" ||  $pass != "0624"){
    header("location:login page2.php?error=wrong");
  }
  if($nama == "DEVI" &&  $_POST["pass"] == "0624"){
    $_SESSION["user"] = $nama;
    $_SESSION["pass"] = $pass;
    header("location:login page3.php");
  }
}
function check_login(){
  if(!isset($_SESSION["user"])){
    header("location:login page2.php");
  }
}

 ?>