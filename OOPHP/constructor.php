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
    

$produk1 = new Produk("Kisah Kehidupan Sukses dari Nabila", "Nabila Putri Aisyah Insirawati", "Novel", 50000, 130);
$produk2 = new Produk("Nama saya Nabila", "Nabilaptrsyh", "Nabilaptrsyh", 35000, 30);
$produk3 = new Produk("Dragon Ball");

echo "Novel : ", $produk1->getLabel();
echo "<br>";
echo "Novel : " , $produk2->getLabel();
echo "<br>";