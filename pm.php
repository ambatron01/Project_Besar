<?php

class produk
{
    public $judul = "judul",
    $penuli = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

    public function getlabel()
{
    return "$this->penulis,$this->penerbit,$this->harga";
}
}

    $produk3 =new produk();
    $produk3->judul= "naruto";
    $produk3->penulis= "masashi kishimoto";
    $produk3->penerbit="shonen jump";
    $produk3->harga=30000;

    echo "komik: " .$produk3->getlabel();

    