<?php

    $nip = $_SESSION['username'];

    $sql = $koneksi->query("SELECT * from tb_karyawan, tb_jabatan
                            where tb_karyawan.jabatan=tb_jabatan.kode_jabatan
                            and nip = '$nip'");

    $data= $sql->fetch_assoc();

 ?>


<div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="images/<?php echo $data['foto'];?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama']; ?></h3>

              <p class="text-muted text-center"><?php echo $data['nama_jabatan']; ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Jenis Kelamin :</b> <a class="pull-right"><?php echo $data['jk']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Pendidikan :</b> <a class="pull-right"><?php echo $data['pendidikan']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Alamat :</b> <a class="pull-right"><?php echo $data['alamat']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email :</b> <a class="pull-right"><?php echo $data['email']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Telpon :</b> <a class="pull-right"><?php echo $data['telpon']; ?></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
