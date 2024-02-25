<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$Nama=$_POST['Nama'];
$jenis_kelamin=$_POST['Jenis_Kelamin'];
$Alamat=$_POST['Alamat'];
$Tanggal_lahir=$_POST['Tanggal_Lahir'];
$Tempat_lahir=$_POST['Tempat_Lahir'];
$Pekerjaan=$_POST['Pekerjaan'];
$Nomor_Hp=$_POST['Nomor_Hp'];
$Pinjaman=$_POST['Pinjaman'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into pendaftaran(Nama,Jenis_Kelamin,Alamat,Tanggal_Lahir,Tempat_Lahir,Pekerjaan,Nomor_Hp,Pinjaman) 
                        values ('$Nama', '$Jenis_Kelamin', '$Alamat', '$Tanggal_Lahir', '$Tempat_Lahir', '$Pekerjaan', '$Nomor_Hp', '$Pinjaman')");

if($simpan==true){

    header("location:tampil-pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>