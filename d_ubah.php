<?php

require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NIDN = $_POST['NIDN'];
    $Nama = $_POST['Nama'];
    $JenisKelamin = isset($_POST['JenisKelamin']) ? $_POST['JenisKelamin'] : '';
    $TempatLahir = $_POST['TempatLahir'];
    $TanggalLahir = $_POST['TanggalLahir'];
    $Alamat = $_POST['Alamat'];

    // Perhatikan bahwa perintah SQL yang benar adalah UPDATE, bukan INSERT INTO.
    $sql = "UPDATE tb_dosen 
            SET Nama='$Nama', JenisKelamin='$JenisKelamin', TanggalLahir='$TanggalLahir', TempatLahir='$TempatLahir', Alamat='$Alamat' 
            WHERE NIDN='$NIDN'";

    if (mysqli_query($koneksi, $sql)) {
        // Redirect ke halaman list_mhs.php setelah data berhasil diupdate.
        header('Location: list_dsen.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
