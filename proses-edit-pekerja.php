<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_karyawan'];
$Nik=$_POST['Nik'];
$Nama=$_POST['Nama'];
$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
$Tanggal_Lahir=$_POST['Tanggal_Lahir'];
$Email=$_POST['Email'];
$Alamat=$_POST['Alamat'];

$ubah=$koneksi->query("update Pekerja set Nik='$Nik', Nama='$Nama', Jenis_Kelamin='$Jenis_Kelamin', Tanggal_Lahir='$Tanggal_Lahir', Email='$Email', Alamat='$Alamat' where id_karyawan='$id'");

if($ubah==true){

    header("location:tampil.pekerja.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>