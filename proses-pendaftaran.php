<?php

include "koneksi.php";

$nama = $koneksi->real_escape_string($_POST['nama']); 
$jenis_kelamin = $koneksi->real_escape_string($_POST['jenis_kelamin']);
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$tanggal_lahir = $koneksi->real_escape_string($_POST['tanggal_lahir']); 
$tempat_lahir = $koneksi->real_escape_string($_POST['tempat_lahir']);
$pekerjaan = $koneksi->real_escape_string($_POST['pekerjaan']);
$nomor_hp = $koneksi->real_escape_string($_POST['nomor_hp']);
$pinjaman = $koneksi->real_escape_string($_POST['pinjaman']);       


$simpan=$koneksi->query("insert into pendaftaran(nama,jenis_kelamin,alamat,tanggal_lahir,tempat_lahir,pekerjaan,nomor_hp,pinjaman) 
                        values ('$nama', '$jenis_kelamin', '$alamat', '$tanggal_lahir', '$tempat_lahir', '$pekerjaan', '$nomor_hp', '$pinjaman')");

if($simpan==true){

    header("location:pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>