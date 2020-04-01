<?php

    $nip = $_GET['nip'];

    $sql = $koneksi->query("select * from tb_pegawai2 where nip='$nip'");
    $tampil = $sql->fetch_assoc();

 ?>

<div class="row">
    <div class="col-md-12" >
        <!-- Form Elements -->
        <div class="panel panel-primary" >
            <div class="panel-heading">
                Ubah Pegawai
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-6">
                        <form role="form" method="POST" enctype="multipart/form-data" >


                            <div class="form-group">
                                <label>Nip :</label>
                                <input type="text" class="form-control" name="nip" value="<?php echo $tampil['nip'] ?>" readonly=""  />
                            </div>

                             <div class="form-group">
                                <label>Nama : </label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama'] ?>" />
                             </div>



							 <div class="form-group">

	                            <label> Unit Kerja :</label>
	                            <br>
                                <select  id="kerja" class="form-control" name="u_kerja">

																				
	                                        <?php


	                                            $query = $koneksi->query("SELECT * FROM t_u_kerja ORDER by id");

	                                            while ($data=$query->fetch_assoc()) {
                                                    $pilih=($data['id']==$tampil['id_u_kerja']?"selected":"");
	                                                echo "<option value='$data[id]' $pilih> $data[u_kerja]</option>";
	                                            }

	                                        ?>

	                            </select>
                    		</div>



                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
			            <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
                </form>

<?php

	if (isset($_POST['simpan'])) {


		$nama = $_POST['nama'];
		
		$u_kerja = $_POST['u_kerja'];
	

        $koneksi->query("UPDATE  tb_pegawai2 SET  nama='$nama', id_u_kerja='$u_kerja' where nip='$nip'");

    

      ?>
             <script>
                    setTimeout(function() {
                        swal({
                            title: "Selamat!",
                            text: "Data Berhasil Diubah!",
                            type: "success"
                        }, function() {
                            window.location = "?page=pegawai";
                        });
                    }, 300);
            </script>
    <?php

  


	}

 ?>
