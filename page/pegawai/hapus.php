<?php

	

	$koneksi->query("delete from tb_pegawai2 where nip='$_GET[nip]'");

	



?>


<script>
    setTimeout(function() {
        sweetAlert({
            title: 'OKE!',
            text: 'Data Berhasil Dihapus!',
            type: 'error'
        }, function() {
            window.location = '?page=pegawai';
        });
    }, 300);
</script>
