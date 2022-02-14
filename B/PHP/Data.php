<?php
class DaftarClub
{
    private $namaClub = "";
    private $negaraAsal = "";
    private $tahunBerdiri = 0;
    private $namaPemain = "";
    private $asalPemain = "";
    private $nopung = 0;

    public function __construct($namaClub = "", $negaraAsal = "", $tahunBerdiri = 0, $namaPemain = "", $asalPemain = "", $nopung = 0)
    {
        $this->namaClub = $namaClub;
        $this->negaraAsal = $negaraAsal;
        $this->tahunBerdiri = $tahunBerdiri;
        $this->namaPemain = $namaPemain;
        $this->asalPemain = $asalPemain;
        $this->nopung = $nopung;
    }

    public function setnamaClub($namaClub)
    {
        $this->namaClub = $namaClub;
    }

    public function getnamaClub()
    {
        return $this->namaClub;
    }

    public function setnegaraAsal($negaraAsal)
    {
        $this->negaraAsal = $negaraAsal;
    }

    public function getnegaraAsal()
    {
        return $this->negaraAsal;
    }

    public function setnamaPemain($namaPemain)
    {
        $this->namaPemain = $namaPemain;
    }

    public function getnamaPemain()
    {
        return $this->namaPemain;
    }

    public function setasalPemain($asalPemain)
    {
        $this->asalPemain = $asalPemain;
    }

    public function getasalPemain()
    {
        return $this->asalPemain;
    }

    public function settahunBerdiri($tahunBerdiri)
    {
        $this->tahunBerdiri = $tahunBerdiri;
    }

    public function gettahunBerdiri()
    {
        return $this->tahunBerdiri;
    }

    public function setnopung($nopung)
    {
        $this->nopung = $nopung;
    }

    public function getnopung()
    {
        return $this->nopung;
    }

}
?>