

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                             Data Tamu
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                  <a href="?page=tamu" class="btn btn-success" style="margin-bottom:  8px;"><i class="fa fa-plus"></i> Tambah </a>
                                    <a id="lap_masuk" data-toggle="modal" data-target="#lap" style="margin-bottom:  8px; margin-left: 5px;" class="btn btn-default"><i class="fa fa-print"></i> Cetak PDF</a>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Keperluan</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Ketemu</th>
                                            <th>Foto</th>
                                            <th>Petugas Jaga</th>
                                            
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_tamu order by id desc ");

                                            while ($data= $sql->fetch_assoc()) {

                                             $jk = ($data['jk']==L)?"Laki-laki":"Wanita";   





                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                             <td><?php echo $data['alamat']; ?></td>
                                             <td><?php echo $jk; ?></td>
                                             <td><?php echo $data['keperluan']; ?></td>
                                             <td><?php echo date('d F Y', strtotime($data['tanggal'])); ?></td>
                                             <td><?php echo $data['jam']; ?></td>
                                             <td><?php echo $data['ketemu']; ?></td>

                                             <td> <img src="upload/<?php echo $data['foto']; ?>" width="75" height="75" alt=""> </td>
                                             <td><?php echo $data['petugas']; ?></td>

                                             <td>
                                                <a href="?page=d_tamu&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs" ><i class="fa fa-edit "></i> Ubah</a>

                                                <?php if(@$_SESSION['admin']){
 ?> 
                                                <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=d_tamu&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs" ><i class="fa fa-trash"></i> Hapus</a>

                                                <?php } ?>

                                                <a href="?page=d_tamu&aksi=detail&id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs" ><i class="fa fa-table"></i> Detail</a>

                                            </td>
                                        </tr>


                                        <?php  } ?>
                                    </tbody>

                                    </table>
                                  </div>

                                 

                        </div>
                     </div>
                   </div>
     </div>




 <div class="modal fade" id="lap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Laporan Data Tamu</h4>
                                        </div>

                                        <div class="modal-body">
                                          <form role="form" method="POST" action="page/tamu/laporan.php" target="blank" >

                                            
                                            <div class="form-group">
                                                <label>Dari Tanggal</label>
                                                <input class="form-control" type="date" name="tgl1" /> 
                                            </div>

                                             <div class="form-group">
                                                <label> Sampai Tanggal</label>
                                                <input class="form-control" type="date" name="tgl2" /> 
                                            </div>

                                           

                                            <div class="modal-footer">

                                           <button type="submit" name="cetak" class="btn btn-default" style="margin-top: 8px;"><i class="fa fa-print"></i> Cetak per Periode</button>
                                            
                                            

                                            

                                            
                                            </div>
                                            </div>  
                                      
                                        
                                        </form> 


    
                                    </div>
                                </div>
                           
                    </div>