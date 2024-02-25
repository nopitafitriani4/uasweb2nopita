<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body"><br><br><br>
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data pekerja</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>NIK</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>No hp</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from pekerja order by nik ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['Nik']?></td>
							<td><?php echo $row['Nama']?></td>
							<td><?php echo $row['Jenis_Kelamin']?></td>
							<td><?php echo $row['Tempat_Lahir']?></td>
							<td><?php echo $row['Tanggal_Lahir']?></td>
							<td><?php echo $row['Alamat']?></td>
							<td><?php echo $row['No_hp']?></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
	
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page --><br><br><br>
		<?php include "footer.php";?>