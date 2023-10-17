<?php

class Komik extends Produk implements InfoProduk {
    public $JmlHalaman;

    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $jmlHalaman = 0 ) {

        parent::__construct( $judul, $penulis, $penerbit, $harga, );

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} ({$this->harga}) ";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Komik : " .  $this->getInfo() . "- {$this->getLabel()} ({$this->harga}) = {$this->jmlHalaman} Halaman.";
        return $str;

    }
}