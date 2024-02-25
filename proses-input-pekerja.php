 <?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$Nik=$_POST['Nik'];
$Nama=$_POST['Nama'];
$Jenis_Kelamin=$_POST['Jenis_kelamin'];
$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
$Alamat=$_POST['Alamat'];
$No_hp=$_POST['No_hp'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into pekerja(Nik,Nama,Jenis_Kelamin,Tanggal_Lahir,Alamat,No_hp) 
                        values ('$Nik', '$Nama', '$Jenis_Kelamin', '$Tanggal_Lahir', '$Alamat', '$No_hp')");

if($simpan==true){

    header("location:tampil.pekerja.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>