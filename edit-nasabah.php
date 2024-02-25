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
                <form action="proses.edit.pekerja.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pekerja where ID_Nasabah='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="ID_Nasabah">id nasabah</label>
                        <input type="hidden" name="ID_Nasabah" value="<?php echo $row['ID_Nasabah']?>" class="form-control">
                        <input type="number" name="ID_Nasanah" value="<?php echo $row['ID_Nasabah']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Nik">Nik</label>
                        <input type="text" name="Nik" value="<?php echo $row['Nik']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <select name="Nama" class="form-control">
                           
                    </div>

                      <div class="form-group">
                        <label for="Jenis_Kelamin">Jenis kelamin</label>
                        <input type="text" name="Jenis_Kelamin" value="<?php echo $row['Jenis_Kelamin']?>" class="form-control">
                        <option value="<?php echo $row['Jnis_Kelamin']?>" selected><?php echo $row['Jenis_Kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea name="Alamat" class="form-control"><?php echo $row['Alamat']?></textarea>
                    </div>

                      

                    <div class="form-group">
                        <label for="No_hp">No hp</label>
                        <select name="No_hp" class="form-control">
                            <option value="<?php echo $row['No_hp']?>" selected><?php echo $row['No_hp']?></option>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>