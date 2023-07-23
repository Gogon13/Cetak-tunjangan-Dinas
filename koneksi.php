<?php 
$server="localhost";
$user="root";
$password="";
$database="eskum";
$koneksi = new mysqli ($server,$user,$password,$database);

mysql_connect($server,$user,$password,$database);
mysql_select_db($database);