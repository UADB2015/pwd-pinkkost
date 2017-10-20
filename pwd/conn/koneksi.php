<?php

$db_host	= "localhost";
$db_user	= "root";
$db_pass	= "";
$db_name	= "db_kost2";

$konek	= new mysqli($db_host,$db_user,$db_pass,$db_name);

if($konek->connect_error){
die("koneksi gagal : ".$conn->connect_error);
}

$denda1=2000;




?>