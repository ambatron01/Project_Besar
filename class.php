<?php

class motor {
public $warna;
public $merek;

    public function nyalakanmesin()
    {
    return "mesin di nyalakan";
    }

}

$motor = new motor();

var_dump($motor->nyalakanmesin());
?>