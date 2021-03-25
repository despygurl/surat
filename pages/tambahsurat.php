

<!DOCTYPE html>
<html>
<head>
    <title>Form Pembuatan Nomor Surat Keluar</title>
</head>

<body>

<?php

include ("fungsi_romawi.php");

$bulan = date('n');
$romawi = getRomawi($bulan);
$tahun = date('Y');
$nomor = "/UPT.BKL/BKN/".$romawi."/".$tahun;

$db = mysqli_connect("localhost", "root", "", "penomoran_surat");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal";
}

//membaca nomor terbesar dari penomoran yang ada di database berdasarkan tahun
$query = "SELECT max(id) as maxid FROM tabelsurat WHERE year(tgl)='$tahun'";

$hasil = mysqli_query($db, $query);
$data = mysqli_fetch_array($hasil);
$nobaru = $data['maxid'];
$idurut = $nobaru+1;

//Membuat Nomor Surat dengan awalan depan 00, misalnya 001,002
$kode = sprintf("%003s", $idurut);
$id = $kode.$nomor;



?>
    <header>
        <h3>Form Pembuatan Nomor Surat Keluar</h3>
    </header>

    <form action="prosestambah.php" method="POST">

        <fieldset>

        <p>
            <label for="id">No. Surat: </label>
            <input type="text" name="id" value="<?php echo $id; ?>" disabled="disabled"/>
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
        </p>
        <p>
            <label for="tgl">Tanggal Pembuatan Surat: </label>
             <input type="date" class="form-control" name="tgl" />
        </p>
        <p>
            <label for="tujuan">Tujuan Surat: </label>
            <input type="text" name="tujuan" />
        </p>
        <p>
            <label for="perihal">Perihal Surat: </label>
            <textarea name="perihal"></textarea>
           
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>

        </fieldset>

    </form>

    </body>
</html>