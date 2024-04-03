<?php

require_once 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Nama = $_POST['Nama'];
    $NIM = $_POST['NIM'];
    $Jurusan = $_POST['Jurusan'];
    $TempatLahir = $_POST['TempatLahir'];
    $TanggalLahir = $_POST['TanggalLahir'];
    $JenisKelamin = isset($_POST['JenisKelamin']) ? $_POST['JenisKelamin'] : '';
    $Alamat = $_POST['Alamat'];

    $sql = "INSERT INTO tb_mhs (Nama, NIM, Jurusan, TempatLahir, TanggalLahir, JenisKelamin, Alamat)
            VALUES ('$Nama', '$NIM', '$Jurusan', '$TempatLahir', '$TanggalLahir', '$JenisKelamin', '$Alamat')";

    if (mysqli_query($koneksi, $sql)) {
        header('Location: list_mhs.php');
        exit();
    } else {
        echo 'Error: '.$sql.'<br>'.mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
