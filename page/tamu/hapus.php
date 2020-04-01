<?php

	$ambil = $koneksi->query("select * from tb_tamu where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto_produk=$data['foto'];

	if (file_exists("upload/$foto_produk")) {
		unlink("upload/$foto_produk");
	}

	$koneksi->query("delete from tb_tamu where id='$_GET[id]'");





?>
  <script>
      setTimeout(function() {
          sweetAlert({
              title: 'OKE!',
              text: 'Data Berhasil Dihapus!',
              type: 'error'
          }, function() {
              window.location = '?page=d_tamu';
          });
      }, 300);
  </script>


<?php

?>
