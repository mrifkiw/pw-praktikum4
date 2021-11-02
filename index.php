<?php
    require_once('StatusKaryawan.php');

    $Wijoyo = new StatusKaryawan(
        1,
        'Wijoyo',
        'Tangerang 25 Oktober 1998',
        Gender::MALE,
        LevelKaryawan::SENIOR,
        StatusKaryawan::FULLTIME
    );
    $Wisnu = new StatusKaryawan(
        3,
        'Wisnu',
        'Depok 24 November 1999',
        Gender::MALE,
        LevelKaryawan::JUNIOR,
        StatusKaryawan::PARTTIME
    );
    $Mukti = new StatusKaryawan(
        3,
        'Mukti',
        'Bekasi 23 Desember 2000',
        Gender::MALE,
        LevelKaryawan::AMATEUR,
        StatusKaryawan::FULLTIME
    );


    $table_header = ["No", "Nama Karyawan", "Tempat, Tanggal Lahir", "Gender", "Level", "Status","Gaji"];
    $daftar_karyawan = array (
        $Wijoyo->getDataInArray(),
        $Wisnu->getDataInArray(),
        $Mukti->getDataInArray()
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Karyawan</title>
</head>
<body>
<div class="board-store">
        <h1>Daftar Karyawan Toko Joyable 🌿</h1>
        <table class="styled-table">
            <thead>
                <tr>
                    <!-- Extract table header name -->
                    <?php
                        foreach ($table_header as $header){
                            echo "<th>{$header}</th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($daftar_karyawan as $dataRow){
                        // Extract daftar karyawan as data(array) each row
                        echo "<tr>";
                        foreach($dataRow as $dataCell){
                            // Extract data row (array) to data each cell
                            // jika data barang kosong
                            echo "<td>";
                            echo "{$dataCell}";
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>