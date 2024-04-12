<?php

//define('NAMA', 'Sandhka Galih');

//echo NAMA;

//echo "<br>";

//const UMUR = 32;
//echo UMUR;

//echo "<br>";

//class Coba {
  //  const NAMA = 'Sandhika';
//}

//echo Coba::NAMA;
//echo "<br";

//echo __FILE__;
//echo __LINE__;


function coba() {
    return __FUNCTION__;
}

echo coba();

echo "<br>";
class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>