<?php 
$server="localhost";
$user="id8811881_mm";
$password="aaaaaaaa";
$database="id8811881_mm";
$koneksi = new mysqli ($server,$user,$password,$database);

mysql_connect($server,$user,$password,$database);
mysql_select_db($database);