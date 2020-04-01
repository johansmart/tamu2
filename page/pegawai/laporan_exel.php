<?php
	error_reporting(0);
	$koneksi = new mysqli("localhost","root","","e_tamu");

	$filename ="exel_pegawai-(".date('d-m-Y').").xls";

	header("content-disposition: attachment; filename='$filename'");
	header("content-type: application/vnd.ms-exel");


?>

<h2> Data Pegawai</h2>

<table border="1px">
	
	<tr>
		<th>No</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Unit Kerja</th>
		<th>Keterangan</th>
		
	</tr>

	<?php

		$no=1;

		$sql = $koneksi->query("select * from tb_pegawai2, t_u_kerja where tb_pegawai2.id_u_kerja=t_u_kerja.id");

		while ($data=$sql->fetch_assoc()) {

			
			
		

	?>

	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nip'];?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['u_kerja'];?></td>
		<td><?php echo $data['ket'];?></td>
		
	</tr>

	<?php } ?>

</table>