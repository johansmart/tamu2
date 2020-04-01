<?php 

    date_default_timezone_set('Asia/Jakarta');
    $tgl=date('Y-m-d');
    $jam=date("H:i:s");


 ?>
<div class="row">
    <div class="col-md-12" >
        <!-- Form Elements -->
       <div class="box box-success box-solid">
                        <div class="box-header with-border">
                Tambah Tamu
            </div>
            <div class="panel-body" >
                <div class="row">
                   
                        <form role="form" method="POST" enctype="multipart/form-data" action="?page=d_tamu&aksi=upload" >
                          <div class="col-md-6">   

                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama"  class="form-control"  >
                            </div>
                            

                             <div class="form-group">
                                      <label>Alamat :</label>
                                      <textarea class="form-control" rows="3" name="alamat"></textarea>
                                </div>

                            <p>Ambil Gambar</p>
							    <div id="camera">Capture</div></p>
							    
							    <div id="webcam">
							        <input type=button value="Capture" class="btn btn-info" onClick="preview()">
							    </div>
							    <div id="simpan" style="display:none">
							        <input type=button value="Batal" class="btn btn-danger" onClick="batal()">
							        <input type="submit" name="save" value="Simpan" onClick="simpan()" class="btn btn-primary">
							        

							    </div>
							 
							    <div id="hasil"></div>

                          </div>
                          
                           <div class="col-md-6">  
                               <div class="form-group">
                                    <label>No Telpon :</label>
                                    <input type="text" name="telp"  class="form-control" >
                                </div>

                                <label> Jenis Kelamin</label>
                                 <select class="form-control" name="jk">

                                         <option>--Pilih Jenis Kelamin--</option>

                                         <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                                         
                                 </select>

                                 <br>
                            

                            <div class="form-group">
                                <label>Bertemu :</label>
                                <input type="text" name="temu" class="form-control" id="nama" data-toggle="modal" data-target="#modal-default"   readonly="">
                            </div>

                            <div class="form-group">
                                <label>Tanggal :</label>
                                <input type="text" name="tgl" value="<?php echo $tgl; ?>" readonly class="form-control"  ">
                            </div>

                             <div class="form-group">
                                <label>Jam :</label>
                                <input type="text" name="jam" value="<?php echo $jam; ?>" readonly class="form-control" id="nama"  >
                            </div>

                            <div class="form-group">
                                      <label>Keperluan :</label>
                                      <textarea class="form-control" rows="3" name="perlu"></textarea>
                                </div>

                            </div>

	
	 
	
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
    


 <script src="webcam/webcam.min.js"></script>
    <script language="Javascript">
        // konfigursi webcam
        Webcam.set({
            width: 500,
            height: 340,
            image_format: 'jpg',
            jpeg_quality: 100
        });
        Webcam.attach( '#camera' );
 
        function preview() {
            // untuk preview gambar sebelum di upload
            Webcam.freeze();
            // ganti display webcam menjadi none dan simpan menjadi terlihat
            document.getElementById('webcam').style.display = 'none';
            document.getElementById('simpan').style.display = '';
        }
        
        function batal() {
            // batal preview
            Webcam.unfreeze();
            
            // ganti display webcam dan simpan seperti semula
            document.getElementById('webcam').style.display = '';
            document.getElementById('simpan').style.display = 'none';
        }
        
        function simpan() {
            // ambil foto
            Webcam.snap( function(data_uri) {
                
                // upload foto
                Webcam.upload( data_uri, 'upload.php', function(code, text) {} );
 
                // tampilkan hasil gambar yang telah di ambil
                document.getElementById('hasil').innerHTML = 
                    '<p>Hasil : </p>' + 
                    '<img src="'+data_uri+'"/>';
                
                Webcam.unfreeze();

                document.getElementById('webcam').style.display = '';
                document.getElementById('simpan').style.display = 'none';

                 
                 
                 
            } );
        }
    </script>