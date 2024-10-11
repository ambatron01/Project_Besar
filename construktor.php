<?php
class porce911 {
    public $nama;
    public $color;

    function __construct($nama, $color) {
        $this->nama =$nama;
        $this->color =$color;
    }
    function get_nama() {
        return $this->nama;
    }
    function get_color() {
        return $this->color;
    }
}

$porce911 = new porce911("porce_911" , "yellow");
echo $porce911->get_nama();
echo "<br>";
echo $porce911->get_color();

?>