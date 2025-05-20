<?php

$Nama = "Made";
$Nilai = "96";
$Grade = "";
$Status = "";


if ($Nilai > 70) {
    $Status = "Lulus";
} else {
    $Status = "Tidak Lulus";
}

if ($Nilai >= 90) {
    $Grade = "A";
} elseif ($Nilai >= 80) {
    $Grade = "B";
} elseif ($Nilai >= 70) {
    $Grade = "C";
} elseif ($Nilai >= 60) {
    $Grade = "D";
} elseif ($Nilai >= 50) {
    $Grade = "E";
}

echo "Nama Peserta: $Nama";
"<br>";
echo "Nilai: $Nilai";
"<br>";
echo "Grade: $Grade";
"<br>";
echo "Status: $Status";

// Nilai: $Nilai;
// Grade: $Grade;
// Status: $Status;;
