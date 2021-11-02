<?php
    require_once('Karyawan.php');

    class StatusKaryawan extends Karyawan {
        const FULLTIME = 'Fulltime';
        const PARTTIME = 'Parttime';
        private array $dataToArray;

        public function __construct(
            $no,
            $nama,
            $ttl,
            $gender,
            $level,
            $status
        ) {
            parent::__construct(
                $no,
                $nama,
                $ttl,
                $gender,
                $level,
                $status
            );
            $this->setGajiKaryawanStatus($this->getStatusKaryawan());
            $this->dataToArray = array (
                $this->getNoKaryawan(),
                $this->getNamaKaryawan(),
                $this->getTTLKaryawan(),
                $this->getGenderKaryawan(),
                $this->getLevelKaryawan(),
                $this->getStatusKaryawan(),
                $this->getGajiKaryawan()
            );
        }

        public function getDataInArray()
        {
            return $this->dataToArray;
        }

        public function setGajiKaryawanStatus(string $status)
        {
            switch ($status) {
                case StatusKaryawan::FULLTIME:
                    $this->setGajiKaryawan($this->getGajiKaryawan());
                    break;
                case StatusKaryawan::PARTTIME:
                    $this->setGajiKaryawan($this->getGajiKaryawan() * 0.5);
                    break;
            }
        }
    }
?>
