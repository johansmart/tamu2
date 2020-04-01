<?php 
    
    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_tamu where id = '$id'");
    $data=$sql->fetch_assoc();

     $jk = ($data['jk']==L)?"Laki-laki":"Wanita";   
    
    

 ?>
    <section class="content-header">
      <h1>
        <input type="button" value="Cetak" onClick="window.print()"><br><br>
        Detail Tamu
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-9">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img   src="upload/<?php echo $data['foto'] ?>" width="600" height="400"  style="text-align: center; margin-left: 100px; ">

              <h3 class="profile-username text-center"><?php echo $data['nama'] ?></h3>

              
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Alamat</b> <a class="pull-right"><?php echo $data['alamat'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Nomor Telpon</b> <a class="pull-right"><?php echo $data['telp'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Keperluan</b> <a class="pull-right"><?php echo $data['keperluan'] ?></a>
                </li>
                 <li class="list-group-item">
                  <b>Jenis Kelamin</b> <a class="pull-right"><?php echo $jk; ?> </a>
                </li>

                <li class="list-group-item">
                  <b>Ketemu</b> <a class="pull-right"><?php echo $data['ketemu']; ?> </a>
                </li>

                 <li class="list-group-item">
                  <b>Tanggal</b> <a class="pull-right"><?php echo  date('d F Y', strtotime($data['tanggal'])); ?> </a>
                </li>

                 <li class="list-group-item">
                  <b>Jam</b> <a class="pull-right"><?php echo $data['jam']; ?> </a>
                </li>


                 <li class="list-group-item">
                  <b>Petugas Jaga</b> <a class="pull-right"><?php echo $data['petugas']; ?> </a>
                </li>

               
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->