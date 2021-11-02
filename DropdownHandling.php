<?php
    require_once('DaftarKaryawan.php');
    $status = $_POST['status'];
    $daftar_karyawan = filterByStatus($daftar_karyawan, $status);
    require_once('index.php');
?>