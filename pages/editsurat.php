<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: listsurat.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tabelsurat WHERE id='$id'";

$query = mysqli_query($db, $sql);
$surat = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Nomor Surat Keluar</title>
</head>

<body>
    <header>
        <h3>Form Edit Nomor Surat Keluar</h3>
    </header>

    <form action="prosesedit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $surat['id'] ?>" />

        <p>
            <label for="id">No Surat: </label>
            <input type="text" name="id" value="<?php echo $surat['id'] ?>" disabled="disabled"/>
        </p>
        <p>
            <label for="tgl">Tanggal Pembuatan Surat: </label>
            <input type="date" name="tgl" value="<?php echo $surat['tgl'] ?>" />
        </p>
        <p>
            <label for="tujuan">Tujuan Surat: </label>
            <input type="text" name="tujuan" value="<?php echo $surat['tujuan'] ?>" />
        </p>
        <p>
            <label for="perihal">Perihal Surat: </label>
            <textarea name="perihal"><?php echo $surat['perihal']?></textarea> 
        </p>
       
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>