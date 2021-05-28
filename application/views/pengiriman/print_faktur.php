	
<html>
<head>
  <title>Laporan Pembayaran</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 300px;
	  font-size: 11pt;
	  font-style: Times new roman;
    }
	
	 table td {
      word-wrap:break-word;
      width:40%;
    }
    
	
  </style>
  
</head>
<body>
<div align="center"><h2>Surat Jalan</h2></div>
<div align="left">
</div>
       <?php
         if(!empty($pengiriman)){
    	$no = 1;
		$grandtotal = 0;
    	foreach($pengiriman as $u){			
		?>	
		<table border="0" cellpadding="8">	
			
			
			<tr>
			<th>Nama</th>
			<td>:<?php echo $u->kepada ?></td>
			 <th>Tanggal</th>
			<td>:<?php echo $u->tanggal ?></td>
			</tr>
			
			<tr>
			<th>No HP</th>
			<td>:<?php echo $u->no_telepon ?></td>
			<th>No DO</th>
			<td>:<?php echo $u->no_do ?></td>
			</tr>
			
			
			<tr>
			<th>Alamat</th>
			<td>:<?php echo $u->alamat ?></td>
			<th>Dikirim Dengan</th>
			<td>:<?php echo $u->ongkir ?></td>
			</tr>
			
			
			<tr>
			<th>No Kontiner</th>
			<td>:<?php echo $u->no_kontainer ?></td>
			<th>Jenis Kendaraan</th>
			<td>:<?php echo $u->jenis_kendaraan ?></td>
			</tr>
			
			
			<tr>
			<th>No Segel</th>
			<td>:<?php echo $u->no_segel ?></td>
			<th>No Polisi</th>
			<td>:<?php echo $u->no_polisi ?></td>
			</tr>
			
			
            
             <tr>
			<th>Nama Supir</th>
			<td>:<?php echo $u->driver ?></td>
			</tr>
			
	
  </table>
  <br><br>
  	<table border="1" cellpadding="8">	
			<tr align="center">
                  <th>Nama Produk</th>
				   <th>Jumlah Karton</th>
                  <th>Satuan/Karton</th>
				   <th>Jumlah Total</th>
			</tr>
		
			
			<tr align="center">
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->qty_karton ?></td>
				<td><?php echo $u->qty_perkarton ?></td>
				<td><?php echo $u->total ?></td>
			</tr>
			 <?php
       	 $grandtotal =$grandtotal + $u->total;
			
    	}
    }
	
    ?>
			
   <tr>
  <td align="right" colspan="3">Total </td>
<td align="center"><?php echo $grandtotal; ?></td>
</tr>
					
		
  </table>

  <br><br>
  <table>
  <tr>
  <td>Logistic/Sopir</td>
  <td></td>
  <td>Manager Gudang</td>
  <td></td>
  <td>Penerima</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  
  <tr>
  <td><br><br><br>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
  <td></td>
  <td><br><br><br>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
  <td></td>
  <td><br><br><br>(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  </table>
  <br><br>
  <table>
  <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  
  <tr>
  <td><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  </table>
  <font>lembar putih:kantor pusat lembar merah:gudang lembar kuning:Accounting lembar hijau:logistic lembar biru:penerima</font>
</body>
</html>
