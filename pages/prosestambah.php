<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['tambah'])){
$tgl = date("Y-m-d H:i:s");



    // ambil data dari formulir
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $tujuan = $_POST['tujuan'];
    $perihal = $_POST['perihal'];
    
    // buat query
    $sql = "INSERT INTO tabelsurat (id, tgl, tujuan, perihal) VALUE ('$id', '$tgl', '$tujuan', '$perihal')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: tables/data.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: tables/data.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>