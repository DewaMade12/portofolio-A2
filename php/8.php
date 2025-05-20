<!-- variable sysytem : var yang dibuat oleh php 
 $_POST, $_GET, $_SESSION, $_SERVER, $_FILES, $_REQUEST
 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable system | Super Global</title>
</head>

<body>

    <form action="" method="get">
        <div class="form-group">
            <label for="">Nama : </label>
            <input type="text" name="nama" placeholder="Masukkan nama anda">
        </div>
        <br>
        <div class="form-group">
            <label for="">Nilai : </label>
            <input type="number" name="nilai" placeholder="Masukkan nilai anda">
        </div>
        <br>
        <div class="form-group">
            <button type="submit">Kirim</button>
        </div>
    </form>

    <?php
    if (isset($_GET['nama'])) {
        $nama = $_GET['nama'];
        $Nilai = $_GET['nilai'];

        
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
        } else {
            $Grade = "E";
        }
    }
    echo "Nama : $nama <br/>";
    echo "Nilai : $Nilai <br/>";
    echo "Grade : $Grade <br/>";
    echo "Status : $Status";

    // $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    // echo "Selamat siang " . $nama . "";
    ?>
</body>

</html>