<?php

    $page = $_GET['page'];
    $aksi = $_GET['aksi'];

    if ($page == "pengguna") {
      if ($aksi == "") {
        include "page/pengguna/pengguna.php";
      }
      if ($aksi == "tambah") {
        include "page/pengguna/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/pengguna/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/pengguna/hapus.php";
      }
    }

    if ($page == "pegawai") {
      if ($aksi == "") {
        include "page/pegawai/pegawai.php";
      }
      if ($aksi == "tambah") {
        include "page/pegawai/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/pegawai/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/pegawai/hapus.php";
      }
    }

    if ($page == "u_kerja") {
      if ($aksi == "") {
        include "page/u_kerja/u_kerja.php";
      }
      if ($aksi == "tambah") {
        include "page/u_kerja/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/u_kerja/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/u_kerja/hapus.php";
      }
    }

    if ($page == "tamu") {
      if ($aksi == "") {
        include "page/tamu/capture.php";
      }
      if ($aksi == "tambah") {
        include "page/tamu/tambah.php";
      }
      if ($aksi == "ubah") {
        include "page/tamu/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/tamu/hapus.php";
      }

    }

    if ($page == "d_tamu") {
      if ($aksi == "") {
        include "page/tamu/d_tamu.php";
      }
      if ($aksi == "detail") {
        include "page/tamu/detail.php";
      }
      if ($aksi == "ubah") {
        include "page/tamu/ubah.php";
      }
      if ($aksi == "hapus") {
        include "page/tamu/hapus.php";
      }

      if ($aksi == "upload") {
        include "upload.php";
      }

    }

    if ($page == "ubah_p") {
      if ($aksi == "") {
      include "ubah_password.php";
      }
    }

     if ($page == "") {
      include "home.php";
    }


 ?>
