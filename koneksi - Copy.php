<?php 
$server="localhost";
$user="id9210902_sekum";
$password="aaaaaaaa";
$database="id9210902_sekum";
$koneksi = new mysqli ($server,$user,$password,$database);

mysql_connect($server,$user,$password,$database);
mysql_select_db($database);