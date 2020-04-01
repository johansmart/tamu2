<!-- Sidebar user panel -->
<div class="user-panel">
  <div>
  <img style="margin-left:30px" src="images/logo.png" width="140" height="120" >
      <h5 style="color:white; font-size: 16px; text-align: center; ">Ditjen PKH</h5>
      <h5 style="color:white;  font-size: 16px; text-align: center; ">Kementerian Pertanian</h5>
  </div>
  <div class="pull-left info">


  </div>
</div>
<!-- search form -->
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>


 <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>


<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
             <li><a href="?page=u_kerja"><i class="fa fa-bars"></i> Unit Kerja</a></li>
             <li><a href="?page=pegawai"><i class="fa fa-users"></i>Pegawai</a></li>
          </ul>
        </li>
        <li>

 
  
<li><a href="?page=d_tamu"><i class="fa fa-viacoin"></i>Data Tamu</a></li>

  
  
<?php if(@$_SESSION['admin']){
 ?> 
  <li><a href="?page=pengguna"><i class="fa fa-user"></i> <span>Data Pengguna </span></a></li>

<?php } ?>


</ul>
