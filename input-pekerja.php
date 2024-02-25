<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-pekerja.php" method="POST">
                    <div class="form-group">
                        <label for="NiK">Nik</label>
                        <input type="number" name="Nik" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Nama">Nama lengkap</label>
                        <input type="text" name="Nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="Tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="Tempat_lahir" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="Tanggal_Lahir">Tanggal Lahir</label>
                        <input type="text" name="Tanggal_Lahir" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="Email" class="form-control">
                    </div>



                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>