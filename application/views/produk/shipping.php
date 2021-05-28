<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Raja Ongkir Codeigniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
<pre>
    <?php print_r($province)?>
</pre>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>Cek Ongkir</h3>
 
			<?php echo form_open('shipping/cekongkir') ?>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Asal</label>
			    <select name="origin_provice" class="form-control" id="exampleFormControlSelect1">
			      <option>- provinsi -</option>
				  <option value='1'>Bali</option><option value='2'>Bangka Belitung</option><option value='3'>Banten</option><option value='4'>Bengkulu</option><option value='5'>DI Yogyakarta</option><option value='6'>DKI Jakarta</option><option value='7'>Gorontalo</option><option value='8'>Jambi</option><option value='9'>Jawa Barat</option><option value='10'>Jawa Tengah</option><option value='11'>Jawa Timur</option><option value='12'>Kalimantan Barat</option><option value='13'>Kalimantan Selatan</option><option value='14'>Kalimantan Tengah</option><option value='15'>Kalimantan Timur</option><option value='16'>Kalimantan Utara</option><option value='17'>Kepulauan Riau</option><option value='18'>Lampung</option><option value='19'>Maluku</option><option value='20'>Maluku Utara</option><option value='21'>Nanggroe Aceh Darussalam (NAD)</option><option value='22'>Nusa Tenggara Barat (NTB)</option><option value='23'>Nusa Tenggara Timur (NTT)</option><option value='24'>Papua</option><option value='25'>Papua Barat</option><option value='26'>Riau</option><option value='27'>Sulawesi Barat</option><option value='28'>Sulawesi Selatan</option><option value='29'>Sulawesi Tengah</option><option value='30'>Sulawesi Tenggara</option><option value='31'>Sulawesi Utara</option><option value='32'>Sumatera Barat</option><option value='33'>Sumatera Selatan</option><option value='34'>Sumatera Utara</option>
			    </select>
			    <br>
			     <select name="origin_city" class="form-control" id="exampleFormControlSelect1">
			      <option>- Kota -</option>
			    </select>
		 	</div>
 
		 	<div class="form-group">
			    <label for="exampleFormControlSelect1">Tujuan</label>
			    <select name="destination_provice" class="form-control" id="exampleFormControlSelect1">
			      <option>- provinsi -</option>
			    </select>
			    <br>
			     <select name="destination_city" class="form-control" id="exampleFormControlSelect1">
			      <option>- Kota -</option>
			    </select>
		 	</div>
		 	<button type="submit" class="btn btn-primary">Cek Ongkir</button>
		 	<?php echo form_close() ?>
		</div>
	</div>
</div>
</body>
</html>