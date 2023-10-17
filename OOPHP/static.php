<?php

// KOMENTAR
// CLASS ContohStatic {
//   public static $angka = 1;

//   public static function HALO() {
//      return "Halo " . self::$angka++ . " kali.";
//   }
//}

//echo ContohStatic::$angka;
//echo "<br";
//echo ContohStatic::halo();
//echo "<hr";
//echo ContohStatic::halo();


class Contoh {
    public static $angka = 1;

    public function HALO() {
        return "HALO " . self::$angka++ . " KALI. <br>";
    }
}

$obj = new Contoh;
echo $obj->HALO();
echo $obj->HALO();
echo $obj->HALO();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->HALO();
echo $obj2->HALO();
echo $obj2->HALO(); 
