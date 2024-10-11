<?php

class data
{
    public $nama = "nama",
    $asalsekolah = "asal sekolah",
    $usia = "usia",
    $kelas = 0;

    public function getlabel()
{
    return "$this->nama<br>=$this->asalsekolah<br>=$this->usia<br>=$this->kelas";
}
}

    $data1 =new data();
    $data1->nama= "aditiya messi pratama";
    $data1->asalsekolah= "ibrohimiyah";
    $data1->usia="15 tahun";
    $data1->kelas=10;

    echo "data siswa:<br>= " .$data1->getlabel();
    echo "<br>";
    echo "<br>";


    $data2 =new data();
    $data2->nama= "dapa firdaus";
    $data2->asalsekolah= "smpn 3 karang tengah";
    $data2->usia="15 tahun";
    $data2->kelas=10;

    echo "data siswa:<br>= " .$data2->getlabel();
    echo "<br>";
    echo "<br>";


    $data3 =new data();
    $data3->nama= "m.alpian";
    $data3->asalsekolah= "mts nurul islam";
    $data3->usia="15 tahun";
    $data3->kelas=10;

    echo "data siswa:<br>= " .$data3->getlabel();