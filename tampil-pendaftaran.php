<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?> 
<div class="container">
    <div class="row">
        <div class="col-md-12"><br><br>
            <h1>Data Pendaftaran Nasabah</h1>

            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>

            <?php 
            if(@$_GET['pesan']=="hapusBerhasil"){
            ?>
                <div class="alert alert-success">
                    Data Berhasil Dihapus!
                </div>
            <?php
            }
            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>

            <table class="table table-bordered table-hover text-center" id="data-table">
            <thead>
                    <tr>
                        
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>pekerjaan</th>
                        <th>No hp</th>
                        <th>pinjaman</th>
                        <th>
                            <a href="input-pendaftaran.php">
                             <button class="btn btn-success glyphicon glyphicon-plus"></button>
                            </a>
                        </th>

                    </tr> 
                </thead> 
                <tbody>
                    <?php
                    include "../koneksi.php";
                    $sql = $koneksi->query("SELECT * FROM pendaftaran ORDER BY nama ASC");
                    $no = 1;
                    while($row = $sql->fetch_assoc()){
                    ?>
                        <tr>
                           
                            
                            <td><?php echo $row['Nama'];?></td>
                            <td><?php echo $row['Jenis_Kelamin'];?></td>
                            <td><?php echo $row['Alamat'];?></td>
                            <td><?php echo $row['Tanggal_Lahir'];?></td>
                            <td><?php echo $row['Tempat_Lahir'];?></td>
                            <td><?php echo $row['Pekerjaan'];?></td>
                            <td><?php echo $row['Nomor_Hp'];?></td>
                            <td><?php echo $row['Pinjaman'];?></td>
                            <td>
                                <a href="edit-pendaftaran.php?id=<?php echo $row['pendaftaran_id']?>">
                                     <button class="btn btn-xs btn-primary glyphicon glyphicon-edit"></button>
                                </a>

                                <a href="hapus-pendaftaran.php?id=<?php echo $row['pendaftaran_id'];?>" onclick="return confirm('Anda yakin menghapus data?')">
                                    <button class="btn btn-xs btn-danger glyphicon glyphicon-trash"></button>
                                </a>

                            </td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div><br><br><br>

