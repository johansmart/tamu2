

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                             Data Unit Kerja
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="example1">
                                     <?php if(@$_SESSION['admin']){?> 
                                      <a href="?page=u_kerja&aksi=tambah" class="btn btn-success" style="margin-bottom:  8px;"><i class="fa fa-plus"></i> Tambah </a>
                                      <?php } ?>

                                    <thead>
                                        <tr>
                                            <th>No</th>
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

                                            $sql = $koneksi->query("select * from t_u_kerja ");

                                            while ($data= $sql->fetch_assoc()) {





                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['u_kerja'];?></td>
                                             <td><?php echo $data['ket']; ?></td>

                                             <?php if(@$_SESSION['admin']){?> 
                                             <td>
                                                
                                                <a href="?page=u_kerja&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info" ><i class="fa fa-edit"></i> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=u_kerja&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                                                

                                            </td>
                                           <?php } ?> 
                                        </tr>


                                        <?php  } ?>
                                    </tbody>

                                    </table>
                                  </div>

                                

                        </div>
                     </div>
                   </div>
     </div>
