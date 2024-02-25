<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id_Nasabah=$_POST['id_nasabah'];
$Nik=$_POST['nik'];
$Nama=$_POST['nama'];
$Jenis_kelamin=$_POST['jenis_kelamin'];
$Alamat=$_POST['alamat'];
$Email=$_POST['email'];
$No_hp=$_POST['No_hp'];


$ubah=$koneksi->query("update nasabah set nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', Alamat='$Alamat', Email='$Email', No_hp='$No_hp',  where id_Nasabah='$id'");

if($ubah==true){

    header("location:tampil-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>