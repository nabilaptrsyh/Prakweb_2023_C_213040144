<?php

class Produk {
    public  $judul , 
            $penulis , 
            $penerbit , 
            $harga,
            $jmlHalaman,
            $waktuMain;


    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0, $jmlHalaman = 0, $waktuMain = 0 ) {
        $this->judul =  $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        


    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} ({$this->harga}) ";
        return $str;
    }
}

class Novel extends Produk {
    public function getInfoProduk() {
        $str = "Novel : {$this->judul} | {$this->getLabel()} ({$this->harga}) = {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Novel1 extends Produk {
    public function getInfoProduk() {
        $str = "Novel : {$this->judul} | {$this->getLabel()} ({$this->harga}) = {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()},  (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Novel("Kisah Kehidupan Sukses dari Nabila", "Nabila Putri Aisyah Insirawati", "Novel", 50000, 130);
$produk2 = new Novel1("Nama saya Nabila", "Nabilaptrsyh", "Nabilaptrsyh", 35000, 30);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

