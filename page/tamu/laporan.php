<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$koneksi = new mysqli  ("localhost","root","","e_tamu");
$content ='

<style type="text/css">
	
	.tabel{border-collapse: collapse;}
	.tabel th{padding: 8px 5px;  background-color:  #cccccc;  }
	.tabel td{padding: 8px 5px;     }
</style>


';
    $content .= '
<page>
    <h2 style="text-align:center;">Laporan Tamu</h2>
    <br>

    ';

    if (isset($_POST['cetak'])) {
    
                $tgl1 = $_POST['tgl1'];
                $tgl2 = $_POST['tgl2'];

            }

    $content .= '
    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal '.date('d F Y', strtotime($tgl1)).' - '.date('d F Y', strtotime($tgl2)).' <br><br>

    <table border="1px" class="tabel" align="center">
    	
    		<tr>
    			<th>No</th>
    			<th>Tanggal</th>
    			<th>Jam</th>
    			<th>Nama</th>
    			<th>Alamat</th>
    			<th>Jenis Kelamin</th>
    			<th>Ketemu</th>
    			<th>Keperluan</th>
                <th>Petugas</th>
    			
    		</tr>';

    		
    			$tgl4 = date("d-m-Y");
    			

    			if (isset($_POST['cetak'])) {
	
				$tgl1 = $_POST['tgl1'];
				$tgl2 = $_POST['tgl2'];

				$no = 1;


				$sql = $koneksi->query("select * from tb_tamu where tanggal between '$tgl1' and '$tgl2' order by id ASC ");
				while ($data=$sql->fetch_assoc()) {

					 $jk = ($data['jk']==L)?"Laki-laki":"Wanita";  

					$content .='
					<tr>
		    			<td>'.$no++.' </td>
		    			<td> '.date('d F Y', strtotime( $data['tanggal'])).' </td>
		    			<td> '.$data['jam'].' </td>
		    			<td> '.$data['nama'].' </td>
		    			<td> '.$data['alamat'].' </td>
		    			<td> '.$jk.' </td>
                        <td> '.$data['ketemu'].' </td>
		    			<td> '.$data['keperluan'].' </td>

		    			
		    			
                        <td> '.$data['petugas'].' </td>
		    			
		    			
		    		</tr>
		    		';
		    		

				}

						
				}else{	
    			

    		
        		$no = 1;
        		$sql = $koneksi->query("select * from tb_tamu order by id ASC  ");
        		while ($data=$sql->fetch_assoc()) {
        		$jk = ($data['jk']==L)?"Laki-laki":"Wanita";  
    	
    		$content .='

    		<tr>
    			<td>'.$no++.' </td>
    			<td> '.date('d F Y', strtotime( $data['tanggal'])).' </td>
    			<td> '.$data['jam'].' </td>
    			<td> '.$data['nama'].' </td>
    			<td> '.$data['alamat'].' </td>
    			<td> '.$jk.' </td>
                <td> '.$data['ketemu'].' </td>
    			<td> '.$data['keperluan'].' </td>
    			
    			
                 <td> '.$data['petugas'].' </td>
    			

    		</tr>

    		';	
    		
    		}
    		}
    		
    		


$content .=' 	
    </table>

    
</page>';

    require_once('../../assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('L','A3','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>