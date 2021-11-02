<?php
    require_once('DaftarKaryawan.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="apple-touch-icon" sizes="180x180" href="Assets/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="Assets/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="Assets/favicon-16x16.png">
<link rel="manifest" href="Assets/site.webmanifest">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daftar Karyawan</title>
</head>
<body>
    <div class="board-store">
        <h1>Daftar Karyawan Toko Joyable 🌿</h1>
        <form 
            class="form-filter"
            action="DropdownHandling.php"
            method="post"
        >
            <div class="dropdown">
                <label for="status">Status Karyawan</label>
                <select name="status" id="status">
                    <option value="Choose Status" selected>Choose Status</option>
                    <option value="All" >All</option>
                    <option value="Fulltime" >Fulltime</option>
                    <option value="Parttime" >Parttime</option>
                </select>
            </div>
            <div class="btn-submit">
                <button type="submit">Filter</button>
            </div>
        </form>
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