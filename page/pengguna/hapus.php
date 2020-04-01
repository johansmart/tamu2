<?php

	$ambil = $koneksi->query("select * from tb_user where id='$_GET[id]'");

	$data = $ambil->fetch_assoc();

	$foto_produk=$data['foto'];

	if (file_exists("images/$foto_produk")) {
		unlink("images/$foto_produk");
	}

	$koneksi->query("delete from tb_user where id='$_GET[id]'");





?>
  <script>
      setTimeout(function() {
          sweetAlert({
              title: 'OKE!',
              text: 'Data Berhasil Dihapus!',
              type: 'error'
          }, function() {
              window.location = '?page=pengguna';
          });
      }, 300);
  </script>


<?php

?>
