 <?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$Nik=$_POST['Nik'];
$Nama=$_POST['Nama'];
$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
$Tempat_Lahir=$_POST['Tempat_Lahir'];
$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
$Alamat=$_POST['Alamat'];
$No_hp=$_POST['No_hp'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pekerja(nis,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,jurusan,alamat) 
                        values ('$nis', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$jurusan', '$alamat')");

if($simpan==true){

    header("location:tampil-pekerja.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>