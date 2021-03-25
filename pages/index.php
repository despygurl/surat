<!DOCTYPE html>
<html>
<head>
    <title>Penomoran Surat Keluar UPT BKN Bengkulu</title>
</head>

<body>
    <header>
        <h3>Penomoran Surat Keluar</h3>
        <h1>UPT BKN Bengkulu</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="tambahsurat.php">Buat Nomor Surat Baru</a></li>
            <li><a href="listsurat.php">Daftar Nomor Surat</a></li>
        </ul>
    </nav>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pembuatan nomor surat baru berhasil!";
            } else {
                echo "Pembuatan nomor surat baru gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>