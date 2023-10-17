<?php

require_once 'App/init.php';

$produk1 = new Novel("Kisah Kehidupan Sukses dari Nabila", "Nabila Putri Aisyah Insirawati", "Novel", 50000, 130);
$produk2 = new Novel("Nama saya Nabila", "Nabilaptrsyh", "Nabilaptrsyh", 35000, 30);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();