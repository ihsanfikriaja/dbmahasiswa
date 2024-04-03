<?php

require_once 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nama = $_POST['Nama'];
    $NIDN = $_POST['NIDN'];
    $JenisKelamin = isset($_POST['JenisKelamin']) ? $_POST['JenisKelamin'] : '';
    $TempatLahir = $_POST['TempatLahir'];
    $TanggalLahir = $_POST['TanggalLahir'];
    $Alamat = $_POST['Alamat'];

    $sql = "INSERT INTO tb_dosen (Nama, NIDN, JenisKelamin, TempatLahir, TanggalLahir, Alamat)
            VALUES ('$Nama', '$NIDN', '$JenisKelamin', '$TempatLahir', '$TanggalLahir', '$Alamat')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: list_dsen.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
