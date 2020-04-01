<?php

    $id = $_GET['id'];

    $sql = $koneksi->query("select * from t_u_kerja where id='$id'");
    $tampil = $sql->fetch_assoc();

 ?>

<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
         <div class="box box-success box-solid">
              <div class="box-header with-border">
                Ubah Unit Kerja
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group">
                                <label>Unit Kerja :</label>
                                <input type="text" class="form-control" name="u_kerja" value="<?php echo $tampil['u_kerja'] ?>" />
                            </div>


                            <div class="form-group">
	                                  <label>Keterangan :</label>
	                                  <textarea class="form-control" rows="3" name="ket"><?php echo $tampil['ket'] ?></textarea>
	                            </div>


                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			                <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
			               </form> 


<?php 

	if (isset($_POST['simpan'])) {
		
		$u_kerja = $_POST['u_kerja'];
		$ket = $_POST['ket'];

		$sql = $koneksi->query("update  t_u_kerja set u_kerja='$u_kerja', ket= '$ket' where id = '$id'");

		if ($sql) {
			echo "

					<script>
					    setTimeout(function() {
					        swal({
					            title: 'Selamat!',
					            text: 'Data Berhasil Diubah!',
					            type: 'success'
					        }, function() {
					            window.location = '?page=u_kerja';
					        });
					    }, 300);
					</script>

			";
		}

	}


 ?>			               
