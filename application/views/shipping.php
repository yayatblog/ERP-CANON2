
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
				  <?php foreach ($province->rajaongkir->results as $prov) {?>
					<option value="<?php echo $prov->province_id ?>"><?php echo $prov->province ?></option>
				  <?php }?>
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
				  <?php foreach ($province->rajaongkir->results as $prov) {?>
					<option value="<?php echo $prov->province_id ?>"><?php echo $prov->province ?></option>
				  <?php }?>
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
