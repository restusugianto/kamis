<?php
class Orang
{
    public $Nama_depan;
    public $nama_belakang;
    public $umur;

    public function __construct($nama_depan, $nama_belakang , $umur)
    {
        $this->nama_depan = $nama_depan;
        $this->nama_belakang = $nama_belakang;
        $this->umur = $umur;
    }

    public function getNamaDepan()
    {
        return $this->nama_depan ;
    }

    public function getNamaBelakang()
    {
        return $this->nama_belakang;
    }

    public function getUmur()
    {
        return $this->umur;

    }
}
?>

