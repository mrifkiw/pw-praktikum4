<?php
    require_once('StatusKaryawan.php');

    $Wijoyo = new StatusKaryawan(
        1,
        'Wijoyo',
        'Tangerang 25 Oktober 1998',
        Gender::MALE,
        LevelKaryawan::AMATEUR,
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
        LevelKaryawan::JUNIOR,
        StatusKaryawan::FULLTIME
    );
    $Ahan = new StatusKaryawan(
        4,
        'Ahan',
        'Solo 12 Juli 1989',
        Gender::MALE,
        LevelKaryawan::AMATEUR,
        StatusKaryawan::FULLTIME
    );
    $Hana = new StatusKaryawan(
        5,
        'Hana',
        'Jogja 03 Maret 1979',
        Gender::FEMALE,
        LevelKaryawan::JUNIOR,
        StatusKaryawan::PARTTIME
    );
    $Adam = new StatusKaryawan(
        6,
        'Adam',
        'Surakarta 08 Juli 1989',
        Gender::MALE,
        LevelKaryawan::SENIOR,
        StatusKaryawan::FULLTIME
    );
    $Marsinah = new StatusKaryawan(
        7,
        'Marsinah',
        'Surabaya 11 November 1969',
        Gender::FEMALE,
        LevelKaryawan::SENIOR,
        StatusKaryawan::FULLTIME
    );


    $table_header = ["No", "Nama Karyawan", "Tempat, Tanggal Lahir", "Gender", "Level", "Status","Gaji"];
    $daftar_karyawan = array (
        $Wijoyo->getDataInArray(),
        $Wisnu->getDataInArray(),
        $Mukti->getDataInArray(),
        $Ahan->getDataInArray(),
        $Hana->getDataInArray(),
        $Adam->getDataInArray(),
        $Marsinah->getDataInArray()
    );

    function filterByStatus(array $array, string $status)   
    {
        $filtered_array=[];
        if ($status == 'All' || $status == 'Choose Status'){
            $filtered_array = $array;
        }else{
            foreach ($array as $data) {
                if ($data[5] == $status){
                    array_push($filtered_array, $data);
                }
            }
        }
        return $filtered_array;
    }
?>
