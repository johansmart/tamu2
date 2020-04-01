<div class="panel panel-primary">
<div class="panel-heading">
		Tambah Data Pengguna
 </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" enctype="multipart/form-data"  >
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" id="username" />

                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="pass" type="Password" id="pass" />

                                        </div>

                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="nama" id="nama" />

                                        </div>


                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="foto" id="foto" />
                                        </div>


                                        <div>

                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                 </div>

                                 </form>
                              </div>
 </div>
 </div>
 </div>


 <?php

 	$username = $_POST ['username'];
 	$pass = $_POST ['pass'];
 	$nama = $_POST ['nama'];

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {
        if ($upload) {



 		$sql = $koneksi->query("insert into tb_user (nama, username, pass,  level, foto)values('$nama', '$username', '$pass', 'user', '$foto')");


    if ($sql) {
      echo "

          <script>
              setTimeout(function() {
                  swal({
                      title: 'Selamat!',
                      text: 'Data Berhasil Disimpan!',
                      type: 'success'
                  }, function() {
                      window.location = '?page=pengguna';
                  });
              }, 300);
          </script>

      ";
    }

 	}

     }

 ?>
