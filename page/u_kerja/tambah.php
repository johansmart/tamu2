<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
         <div class="box box-success box-solid">
              <div class="box-header with-border">
                Tambah Unit Kerja
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group">
                                <label>Unit Kerja :</label>
                                <input type="text" class="form-control" name="u_kerja"  />
                            </div>


                            <div class="form-group">
	                                  <label>Keterangan :</label>
	                                  <textarea class="form-control" rows="3" name="ket"></textarea>
	                            </div>


                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
			                <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
			               </form> 


<?php 

	if (isset($_POST['simpan'])) {
		
		$u_kerja = $_POST['u_kerja'];
		$ket = $_POST['ket'];

		$sql = $koneksi->query("insert into t_u_kerja(u_kerja, ket)values('$u_kerja', '$ket')");

		if ($sql) {
			echo "

					<script>
					    setTimeout(function() {
					        swal({
					            title: 'Selamat!',
					            text: 'Data Berhasil Disimpan!',
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
