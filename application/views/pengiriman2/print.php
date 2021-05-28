	
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
       <?php
         if(!empty($pengiriman)){
    	$no = 1;
		$grandtotal = 0;
    	foreach($pengiriman as $u){			
		?>	
		<table border="1" cellpadding="8">	
			
			
			<tr>
			<th>Dari</th>
			<td>:FIRDYSOFT</td>
			</tr>
			
			<tr>
			<th>Telepon</th>
			<td>:082181000168</td>
			</tr>
			

	
  </table>
  <br><br>
  	<table border="1" cellpadding="8">
<tr>
			<th>Nama Tujuan</th>
			<td>:<?php echo $u->kepada ?></td>
			</tr>
			
			<tr>
			<th>Telepon Tujuan</th>
			<td>:<?php echo $u->no_telepon ?></td>
			</tr>
			
			
			<tr>
			<th>Alamat Tujuan</th>
			<td>:<?php echo $u->alamat ?></td>
			</tr>
			
			
			<tr>
			<th>Informasi Pengiriman</th>
			<td>:</td>
			</tr>
			
			
			<tr>
			<th>Daftar Produk</th>
			<td>:</td>
			</tr>
			
			
          
			
			 <?php
   	
    	}
    }
	
    ?>
				
		
  </table>
</body>
</html>
