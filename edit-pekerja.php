<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-guru.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pekerja where id_karyawan='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nip">Nik</label>
                        <input type="hidden" name="id_karyawan" value="<?php echo $row['id_karyawan']?>" class="form-control">
                        <input type="number" name="Nik" value="<?php echo $row['Nik']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="Nama" value="<?php echo $row['Nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jenis_Kelamin">Jenis Kelamin</label>
                        <select name="Jenis_Kelamin" class="form-control">
                            <option value="<?php echo $row['Jenis_Kelamin']?>" selected><?php echo $row['Jenis_Kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                      <div class="form-group">
                        <label for="Tempat_lahir">Tempat_Lahir</label>
                        <input type="text" name="Tempat_lahir" value="<?php echo $row['Tempat_Lahir']?>" class="form-control">
                    </div>

                      <div class="form-group">
                        <label for="Tanggal_Lahir">Tanggal_Lahir</label>
                        <input type="text" name="Tanggal_Lahir" value="<?php echo $row['Tanggal_Lahir']?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea name="Alamat" class="form-control"><?php echo $row['Alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="No_Hp">No hp</label>
                        <textarea name="No_Hp" class="form-control"><?php echo $row['No_hp']?></textarea>
                    </div>

                    <input type="submit" name="kirim" value="kirim" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>