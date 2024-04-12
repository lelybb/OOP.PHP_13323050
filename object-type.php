<?php

class Produk {
    public $judul, //= "Judul", 
    $penulis, //= "Penulis", 
    $penerbit, //= "Penerbit", 
    $harga; //= "0" ;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
       // echo "Hello Word";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }


    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}


class CetakInfoProduk{
    public function cetak( $produk ){
        $str = " {$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
//$produk3->judul = "Naruto";
//$produk3->penulis = "Masashi Kishimoto";
//$produk3->penerbit = "Shonen Jump";
//$produk3->harga = "30000";

$produk2 = new Produk("uncharted", "Neil Druckman", "Sony Computer", 25000);
//$produk4->judul = "Uncharted";
//$produk4->penulis = "Neil Druckmann";
//$produk4->penerbit = "Sony Computer";
//$produk4->harga = 250000;

// $produk3 = new Produk("Dragon Ball");


echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game : " .$produk2->getLabel();
//var_dump($produk3);
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>