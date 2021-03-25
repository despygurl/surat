<?php

//$server = "localhost";
//$user = "root";
//$password = "";
//$nama_database = "penomoran_surat";

//$db = mysqli_connect($server, $user, $password, $nama_database);

//if( !$db ){
//    die("Gagal terhubung dengan database: " . mysqli_connect_error());
//}


$db = mysqli_connect("localhost", "root", "", "penomoran_surat");

if(mysqli_connect_errno()){
	echo "Koneksi database gagal";
}

?>