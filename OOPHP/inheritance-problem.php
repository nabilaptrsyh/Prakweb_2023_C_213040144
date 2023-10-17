<?php

class Produk {
    public  $judul , 
            $penulis , 
            $penerbit , 
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;


    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {
        $this->judul =  $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;


    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ({$this->harga}) ";
        if( $this->tipe == "Novel" ) {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "Novel" ) {
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()},  (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Kisah Kehidupan Sukses dari Nabila", "Nabila Putri Aisyah Insirawati", "Novel", 50000, 130);
$produk2 = new Produk("Nama saya Nabila", "Nabilaptrsyh", "Nabilaptrsyh", 35000, 30);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

