<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Penomoran Surat Keluar UPT BKN Bengkulu</title>
</head>

<body>
    <header>
        <h3>Daftar Surat Keluar</h3>
    </header>

    <nav>
        <a href="tambahsurat.php">[+] Buat Nomor Surat Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No Surat</th>
            <th>Tanggal Buat Surat</th>
            <th>Tujuan Surat</th>
            <th>Perihal</th> 
            <th>Tindakan</th>           
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tabelsurat";
        $query = mysqli_query($db, $sql);

        while($surat = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$surat['id']."</td>";
            echo "<td>".$surat['tgl']."</td>";
            echo "<td>".$surat['tujuan']."</td>";
            echo "<td>".$surat['perihal']."</td>";
            
            echo "<td>";
            echo "<a href='editsurat.php?id=".$surat['id']."'>Edit</a> | ";
            echo "<a href='hapussurat.php?id=".$surat['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>