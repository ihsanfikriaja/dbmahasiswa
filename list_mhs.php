<?php

 include 'index.php'; 
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
    <style>
         .ihsan  {
            text-align: center;
        }
    </style>
    </style>
</head>
<body>
<h1 class="ihsan">List Mahasiswa</h1>
    <div class="container">
        <div class="header">
            <div class="judul">
                <h1>Data Mahasiswa</h1>
            </div>
            <a href="form_mhs.php">Tambah</a>
        </div>
        <div class="data">
            <div class="card">
                <div class="card_ket">
                    <img src="logo.png" alt="">
                    <div class="card_title">
                    <h1></h1>
                        <p></p>
                        <h1>STMIK SZ NW</h1>
                        <p>Anjani Lombok Timur</p>
                    </div>
                </div>
                <div class="card_isi">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Jurusan</th>
                                <th>TempatLahir</th>
                                <th>TanggalLahir</th>
                                <th>JenisKelamin</th>
                                <th>Alamat</th>
                                <th colspan='2'>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        require_once 'koneksi.php';
                        $sql = 'SELECT * FROM tb_mhs';
                        $result = mysqli_query($koneksi, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                echo "<td align='left'>".$row['Nama'].'</td>';
                                echo "<td align='left'>".$row['NIM'].'</td>';
                                echo "<td align='left'>".$row['Jurusan'].'</td>';
                                echo "<td align='left'>".$row['TempatLahir'].'</td>';
                                echo '<td>'.$row['TanggalLahir'].'</td>';
                                echo '<td>'.$row['JenisKelamin'].'</td>';
                                echo "<td align='left'>".$row['Alamat'].'</td>';
                                // Tombol Edit
                                echo "<td><form action='ubah_mhs.php' method='get'><input type='hidden' name='nim' value='".$row['NIM']."'><button type='submit' class='btn-edit'>Ubah</button></form></td>";
                                // Tombol Hapus
                                echo "<td><form action='hapus_mhs.php' method='get'><input type='hidden' name='nim' value='".$row['NIM']."'><button type='submit' class='btn-hapus'>Hapus</button></form></td>";
                                echo '</tr>';
                                ++$no;
                            }
                        } else {
                            echo "<tr><td colspan='9'>Belum ada data mahasiswa.</td></tr>";
                        }

                        mysqli_close($koneksi);
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>