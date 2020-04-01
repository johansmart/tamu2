<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                             Data Pegawai
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">

                                  <?php if(@$_SESSION['admin']){?> 

                                   <a href="?page=pegawai&aksi=tambah" class="btn btn-success" style="margin-bottom:  12px;" > <i class="fa fa-plus"></i> Tambah</a>
                                   <?php } ?>

                                  <a href="page/pegawai/laporan_pdf.php" class="btn btn-default" target="blank" style="margin-bottom:  12px; margin-left: 5px;"><i class="fa fa-print"></i> Cetak PDF</a>
                                  <a href="page/pegawai/laporan_exel.php" class="btn btn-default" target="blank" style="margin-bottom:  12px; margin-left: 5px;"><i class="fa fa-print"></i> Cetak Excel</a>

                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama </th>
                  <th>Unit Kerja</th>
                  <th>Keterangan</th>

                   <?php if(@$_SESSION['admin']){?> 
                  <th>Aksi</th>
                  <?php } ?>
                </tr>
                </thead>

                <tbody>

                  <?php
                      $no = 1;
                      $sql = $koneksi->query("select * from tb_pegawai2, t_u_kerja where tb_pegawai2.id_u_kerja=t_u_kerja.id");
                      while ($data=$sql->fetch_assoc()) {



                   ?>

                  <tr>
                   <td><?php echo $no++; ?></td>
                   <td><?php echo $data['nip'] ?></td>
                   <td><?php echo $data['nama'] ?></td>
                   <td><?php echo $data['u_kerja'] ?></td>
                   <td><?php echo $data['ket'] ?></td>
                   

                    <?php if(@$_SESSION['admin']){?> 

                   <td>

                      

                      <a  href="?page=pegawai&aksi=ubah&nip=<?php echo $data['nip'];?>" class="btn btn-info btn-xs"> <i class="fa fa-edit"></i> Ubah</a>
                      <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data ini...???')" href="?page=pegawai&aksi=hapus&nip=<?php echo $data['nip'];?>"" class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> Hapus</a>
                     
                     

                   </td>
                  <?php } ?>  
                 </tr>

                 <?php } ?>
                </tbody>

              </table>
            </div>


       

                        </div>
                     </div>
                   </div>
     </div>
