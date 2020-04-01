<?php 
    date_default_timezone_set('Asia/Jakarta');
    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_tamu where id = '$id'");
    $data=$sql->fetch_assoc();
    
    $jam = date("h:i:s");


    
         if($_SESSION['admin']){
              $user_l=$_SESSION['admin'];

         }elseif ($_SESSION['user']) {
              $user_l=$_SESSION['user'];
         }

         $sql_u = $koneksi->query("select* from tb_user where id='$user_l'");
         $data_u = $sql_u->fetch_assoc();

         $user = $data_u['nama'];



 ?>

<div class="row">
    <div class="col-md-6" >
        <!-- Form Elements -->
        <div class="box box-success box-solid">
              <div class="box-header with-border">
                Tambah Data Tamu
            </div>
            <div class="panel-body" >
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST" enctype="multipart/form-data" >

                        	 <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control"  >
                            </div>
                            

                             <div class="form-group">
	                                  <label>Alamat :</label>
	                                  <textarea class="form-control" rows="3" name="alamat"><?php echo $data['alamat'] ?></textarea>
	                            </div>

	                          <div class="form-group">
                                <label>No Telpon :</label>
                                <input type="text" name="telp" value="<?php echo $data['telp'] ?>" class="form-control" >
                            </div>  

	                         <div class="form-group">

								 <label> Jenis Kelamin</label>
								 <select class="form-control" name="jk">

														 <option>--Pilih Jenis Kelamin--</option>

														 <option value="L" <?php if( $data['jk']=='L'){echo "selected"; } ?>>Laki-laki</option>
                                                        <option value="P" <?php if( $data['jk']=='P'){echo "selected"; } ?>>Perempuan</option>
														 
								 </select>
					 		</div>

					 		<div class="form-group">
                                <label>Bertemu :</label>
                                <input type="text" name="temu" class="form-control" id="nama" data-toggle="modal" data-target="#modal-default" value="<?php echo $data['ketemu'] ?>"   readonly="">
                            </div>

                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="date" name="tgl" class="form-control" readonly=""  value="<?php echo $data['tanggal'] ?>">
                            </div>

                             <div class="form-group">
                                <label>Jam :</label>
                                <input type="time" name="jam" class="form-control" id="nama" readonly="" value="<?php echo $data['jam']; ?>"  >
                            </div>

					 		<div class="form-group">
	                                  <label>Keperluan :</label>
	                                  <textarea class="form-control" rows="3" name="perlu"><?php echo $data['keperluan'] ?></textarea>
	                            </div>
                            
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            <input type=button value=Kembali onclick=self.history.back() class="btn btn-info" />
	
						</form>

       

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                 <center><h4 class="modal-title" id="myModalLabel">Pilih Pegawai</h4></center>
              </div>
              <div class="modal-body">
                <table class="table table-striped table-bordered table-hover" id="example1">
                                    <thead>
                                        <tr>
                                           
                                            <th>NIP</th>
                                            <th>NAMA</th>
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            

                                            $sql = $koneksi->query("select * from tb_pegawai2 ");

                                            while ($r= $sql->fetch_assoc()) {





                                       echo"
											<tr style='cursor:pointer' class='pilih' data-nama='$r[nama]'>
												
												<td>$r[nip]</td>
												<td>$r[nama]</td>
											</tr> 
					 
											";
										}
										?>

                                    </table>     

              </div>
              
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
        


         <script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                
                
                document.getElementById("nama").value = $(this).attr('data-nama');
                $('#modal-default').modal('hide');
            });
            

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });
        </script> 


       
<?php

    if (isset($_POST['simpan'])) {


        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $jk = $_POST['jk'];
        $temu = $_POST['temu'];
        $perlu = $_POST['perlu'];
        $tgl= $_POST['tgl'];
        $jam= $_POST['jam'];
        


    $koneksi->query("UPDATE  tb_tamu SET  nama='$nama', alamat='$alamat', telp='$telp', jk='$jk', keperluan='$perlu', tanggal='$tgl', jam='$jam', ketemu='$temu', petugas='$user'  where id='$id'");

      ?>
           <script>
            setTimeout(function() {
                swal({
                    title: "Selamat!",
                    text: "Data Berhasil Diubah!",
                    type: "success"
                }, function() {
                    window.location = "?page=d_tamu";
                });
            }, 300);
        </script>
        <?php



    }

 ?>


