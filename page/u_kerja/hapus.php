<?php

	

	$koneksi->query("delete from t_u_kerja where id='$_GET[id]'");

	



?>


<script>
    setTimeout(function() {
        sweetAlert({
            title: 'OKE!',
            text: 'Data Berhasil Dihapus!',
            type: 'error'
        }, function() {
            window.location = '?page=u_kerja';
        });
    }, 300);
</script>
