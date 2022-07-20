<?php 
    //proses yang dapat terjadi
    //mengambil data dari parameter input halaman  biodata
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $fakultas= $_POST['fakultas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    //menampilkan data 
    echo "Nama = $nama"."<br>";
    echo "NIM = $nim" . "<br>";
    echo "Fakultas = $fakultas";
    echo "Jenis Kelamin = $jenis_kelamin" . "<br>";
    //disini ditulis proses lain yang dapat dilakukan seperti
    
    //insert ke database
    //update delete data
?>