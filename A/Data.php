<?php

class daftarMahasiswa
{
    private $nim = 0;
    private $nama = "";
    private $prodi = "";
    private $semester = 0;

    public function __construct($nim = 0, $nama = "", $prodi = "", $semester = 0)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    //Syntax untuk mengatur NIM
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    //Syntax untuk mengatur nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    //Syntax untuk mengatur prodi
    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    //Syntax untuk mengatur Semester
    public function setSMT($semester)
    {
        $this->semester = $semester;
    }

    public function getSMT()
    {
        return $this->semester;
    }
}

?>