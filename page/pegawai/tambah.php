<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
         <div class="box box-success box-solid">
              <div class="box-header with-border">
                Tambah Pegawai
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group">
                                <label>Nip :</label>
                                <input type="text" class="form-control" name="nip"  />
                            </div>

                             <div class="form-group">
                                <label>Nama : </label>
                                <input type="text" class="form-control" name="nama" />
                             </div>

														
							<div class="form-group">

	                            <label> Unit Kerja :</label> <br>
	                            <select data-placeholder="Pilih Unit Kerja..."  class="form-control" id="kerja" name="u_kerja">

									<option value=""></option>
	                                        <?php


	                                            $query = $koneksi->query("SELECT * FROM t_u_kerja ORDER by id");

	                                            while ($data=$query->fetch_assoc()) {
	                                              echo "<option value='$data[id]'> $data[u_kerja]</option>";
	                                            }

	                                        ?>

	                            </select>
                    		</div>



                  		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
		                <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
                </form>

<?php

	if (isset($_POST['simpan'])) {

		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$u_kerja = $_POST['u_kerja'];
		


		

		$simpan = $koneksi->query("insert into tb_pegawai2(nip, nama,  id_u_kerja)values('$nip', '$nama',  '$u_kerja')");
		


		if ($simpan) {
			echo "

					<script>
					    setTimeout(function() {
					        swal({
					            title: 'Selamat!',
					            text: 'Data Berhasil Disimpan!',
					            type: 'success'
					        }, function() {
					            window.location = '?page=pegawai';
					        });
					    }, 300);
					</script>

			";
		

			}

	}

 ?>
