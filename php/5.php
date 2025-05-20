<!-- if= percabangan dan logika, untuk menjalankan kdoe berdasarkan kondisi yang dicari  -->

<?php



//  : memberikan nilai
// ==  : membandingkan nilai
// ===  : membandingkan nilai dan tipe data
// !=  : membandingkan nilai
// !empty :kosong
// !isset = tidak kosong
// > : lebih besar, < lebih kecil, >= : lebih besar sama dengan,
// <= : lebih kecil sama dengan
$nama = "Made";
if ($nama !== "Made") {
    echo "iya";
} else {
    echo "tidak";
}
echo "<br>";

if (empty($nama)) {
    echo "Yaa";
} else {
    echo "bukan";
}
echo "<br>";

$suhu = 35;
if ($suhu > 37) {
    echo "demam";
} elseif ($suhu >= 35) {
    echo "normal";
} else {
    echo "dingin";
}
echo "<br>";





