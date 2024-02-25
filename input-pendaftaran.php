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
                <h2>PENDAFTARAN NASABAH</h2>
            <form action="proses-input-pendaftaran.php" method="post">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat"class="form-control" placeholder="Alamat Lengkap" required></textarea>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                    <label for="pekerjaan">pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" placeholder="pekerjaan">
                </div>

                <div class="form-group">
                    <label for="nomor_hp">Nomor Telepon</label>
                    <input type="text" class="form-control" name="nomor_hp" placeholder="nomor_hp">
                </div>

                <div class="form-group">
                    <label for="pinjaman">pinjaman</label>
                    <select class="form-control" name="pinjaman">
                            <option value="1000000">1000000</option>
                            <option value="2000000">2000000</option>
                            <option value="5000000">5000000</option>
                            <option value="10000000">10000000</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
    </div>
    </div> <br><br><br><br>

<?php include "footer.php";?>