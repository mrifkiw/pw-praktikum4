<?php

class Gender {
    const MALE = 'laki-laki';
    const FEMALE = 'Perempuan';
}
class LevelKaryawan {
    const JUNIOR = 'Junior';
    const AMATEUR = 'Amateur';
    const SENIOR = 'Senior';
}

abstract class Karyawan {
    private int $gaji = 0;

    public function __construct(
        private string $no,
        private string $nama,
        private string $ttl,
        private string $gender,
        private string $level,
        private string $status,
    )
    {
        $this->setGajiKaryawanLevel($this->level);
    }

    function setGajiKaryawanLevel(string $level)
    {
        switch ($level) {
            case LevelKaryawan::AMATEUR:
                $this->gaji = 2000000;
                break;
            case LevelKaryawan::JUNIOR:
                $this->gaji = 3500000;
                break;
            case LevelKaryawan::SENIOR:
                $this->gaji = 5000000;
                break;
        }
    }

    public function getNoKaryawan()
    {
        return $this->no;
    }
    public function getNamaKaryawan()
    {
        return $this->nama;
    }
    public function getTTLKaryawan()
    {
        return $this->ttl;
    }
    public function getGenderKaryawan()
    {
        return $this->gender;
    }
    public function getLevelKaryawan()
    {
        return $this->level;
    }
    public function getStatusKaryawan()
    {
        return $this->status;
    }
    public function getGajiKaryawan()
    {
        return $this->gaji;
    }
    public function setGajiKaryawan(string $gaji)
    {
        $this->gaji = $gaji;
    }
}
