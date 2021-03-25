<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $tgl = $_POST['tgl'];
    $tujuan = $_POST['tujuan'];
    $perihal = $_POST['perihal'];
    

    // buat query update
    $sql = "UPDATE tabelsurat SET id='$id', tgl='$tgl', tujuan='$tujuan', perihal='$perihal' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: tables/data.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>