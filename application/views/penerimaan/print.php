	
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
<div align="center"><h2>Laporan Penerimaan Barang Dari Supplier</h2></div>
<div align="left">
</div>
       <?php
         if(!empty($penerimaan)){
    	$no = 1;
		$grandtotal = 0;
    	foreach($penerimaan as $u){
        $total=$u->qty * $u->isi_karton;			
		?>	
		<table border="0" cellpadding="8">	
			
			<tr>
			<th>Supplier</th>
			<td>:<?php echo $u->supplier ?></td>
			<th>No LPB</th>
			<td>:<?php echo $u->no_lpb ?></td>
			<th>No Polisi</th>
			<td>:<?php echo $u->no_polisi ?></td>
			</tr>
            
             <tr>
			<th>No SJ</th>
			<td>:<?php echo $u->no_sj ?></td>
			<th>No PO</th>
			<td>:<?php echo $u->no_po ?></td>
			<th>Supir</th>
			<td>:<?php echo $u->nama_supir ?></td>
			</tr>
			
			<tr>
			<th>Tanggal</th>
			<td>:<?php echo $u->tanggal ?></td>
			<th>No Kontiner</th>
			<td>:<?php echo $u->no_kontiner ?></td>
			<th>No Segel</th>
			<td>:<?php echo $u->no_segel ?></td>
			</tr>

  </table>
  <br><br>
  	<table border="1" cellpadding="8">	
			<tr align="center">
                  <th>Kode</th>
				  <th>Nama</th>
				   <th>Jumlah Karton</th>
                  <th>Satuan/Karton</th>
				   <th>Total</th>
			</tr>
		
			
			<tr align="center">
				<td><?php echo $u->kode_id ?></td>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->qty ?></td>
				<td><?php echo $u->isi_karton ?></td>
				<td><?php echo $total ?></td>
			</tr>
			 <?php
       	 $grandtotal =$grandtotal + $total;
			
    	}
    }
	
    ?>
			
   <tr>
  <td align="right" colspan="4">Total </td>
<td align="center"><?php echo $grandtotal; ?></td>
</tr>
					
		
  </table>

  <br><br>
  <table>
  <tr>
  <td>Diterima Oleh</td>
  <td></td>
  <td>Diperiksa Oleh</td>
  <td></td>
  <td>Diperiksa Oleh</td>
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
