<?php
	include "koneksi/koneksi.php";

    $id = $_GET['id'];
    
?>


    
    <div class="row">
    <div class="col-md-6">
        <!-- Form Elements -->
        <div class="box box-success box-solid">
                        <div class="box-header with-border">
                Ubah Password
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <form role="form" method="POST">

                        	<label>Password Lama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" name="pwdlm"    class="form-control"  >
                                </div>
                            </div>

                            <label>Password Baru</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="password" name="pwdbr"    class="form-control"  >
                                </div>
                            </div>

                            <div>
	                            <input type="submit" name="ubah" value="Ubah" class="btn btn-primary "/>
	                			<input type=button value=Batal onclick=self.history.back() class="btn btn-info" />
                			</div>

						</form>
			</div>
			</div>
	</div>					

<?php

    
    $pwdlm = $_POST ['pwdlm'];
    $pwdbr = $_POST ['pwdbr'];
    
    $ubah = $_POST ['ubah'];
    
    if($ubah){
        $sqlpwd=$koneksi->query("select * from tb_user where id = '$id' and pass='$pwdlm'");
        $ketemu = $sqlpwd->num_rows;
        if($ketemu==0){
            
             ?>
            <script type="text/javascript">
                alert("Gagal ganti password... Password lama salah..!!");
                 window.location.href="?page=ubah_p&id=<?php echo $id; ?>";
            </script>
            <?php
        }else{
            $koneksi->query("update tb_user set pass='$pwdbr' where id='$id'");
            
            ?>
            <script type="text/javascript">
                alert("Ganti password berhasil!!");
                 window.location.href="?page=ubah_p&id=<?php echo $id;?>";
            </script>
            <?php
        }
        
    }

?>