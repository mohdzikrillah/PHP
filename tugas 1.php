<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <form method="post">
        <label >Nama</label>
        <input name="nama" type="text"><br>

        <label>Email</label>
        <input name="email" type="email"><br>

        <label>Nilai Ujian</label>
        <input name="nilai" type="number"><br>

        <input type="submit" name="gas" value="Kirim">
    </form>

    <?php
        if (isset($_POST['gas'])){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $nilai = (int) $_POST['nilai'];
            $login = $_POST['gas'];

            if ($nilai >= 70 && $nilai <=100 ) $grade = "Selamat, atas nama: $nama, dengan nilai $nilai, dinyatakan LULUS";
            else if ($nilai < 70 && $nilai > 0) $grade = "Tetap semangat, atas nama $nama, dengan nilai $nilai, dinyatakan REMIDIAL";
            else $grade = "Nilai tidak valid";
            
            echo "Nama: $nama <br>Nilai: $nilai<br>$grade";
        }
    ?>

</body>
</html>