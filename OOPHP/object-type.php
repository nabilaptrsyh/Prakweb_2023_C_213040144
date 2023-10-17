<?php

class Produk {
    public  $judul , 
            $penulis , 
            $penerbit , 
            $harga ;


    public function __construct( $judul= "judul", $penulis= "penulis", $penerbit= "penerbit", $harga= 0 ) {
        $this->judul =  $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;    
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
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

echo "Novel : ", $produk1->getLabel();
echo "<br>";
echo "Novel : " , $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
