<?php
    function do_Login($username, $password){

        //cek kondisi jika username dan password salah
        if($username != "admin" || $password != "admin"){
            header("Location:index.php?eror=wrong");
        }
        //cek kondisi jika username dan password benar
        if($username == "admin" && $_POST["password"] == "admin"){
            $_SESSION["user"] = $username;
            $_SESSION["pass"] = $password;

            header("Location:berada.php");
        }
    }
    function check_login(){
        //sek kondisi login sesuai 
        if(!isset($_SESSION["user"])){
            header("location:index.php");
        }
    }
?>
