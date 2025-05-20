<!-- Fungction
 1. fungction yang kita buat  
 2. fungction bawaan strlen(), in_array()
 -->

<?php
function Name()
{
    echo "Nama saya Dewa Made Sarvasya <br>";
}

function callNameLagi()
{
    return "Nama saya Dewa Made Sarvasya";
}

function perkalian()
{
    $angka1 = 15;
    $angka2 = 25;
    $total = $angka1 * $angka2;
    return $total;
}
// callName();
echo "<br>";
echo callNameLagi();
echo "<br>";
echo perkalian();

?>