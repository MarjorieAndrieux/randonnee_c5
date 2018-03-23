<?php
$connect=mysqli_connect("localhost", "root", "greendayÉ(&&", "reunion_island");
$connect->query ("SET NAMES UTF8");


$nom=$_POST ['nom'];
$difficulte=$_POST ['difficulte'];
$distance=$_POST ['distance'];
$duree=$_POST ['duree'];
$denivele=$_POST ['denivele'];
$praticable=$_POST ['praticable'];


?>