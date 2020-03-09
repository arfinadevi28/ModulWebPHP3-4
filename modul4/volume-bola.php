<?php
	$jari = $_POST["jari2"];
	$phi = 22/7; 

    if ($_POST["submit"] == "Hasil volume bola"){
	$hasil = 4/3 * $phi * $jari* $jari* $jari ;
		echo"Rumus (V) =  4/3 × π × r³ .<br>";
		echo"Jari - jari = $jari .<br>" ;
		echo "Volume bola (V) = $hasil ";    
	}
	else if($_POST["submit"] == "Hasil luas bola"){
		$hasil = 4 * $phi * $jari * $jari ;
		echo "Rumus (L) = 4 × π × r² .<br>";
		echo "Jari - jari = $jari .<br>";
		echo "Luas bola (L) = $hasil";
	}
?>