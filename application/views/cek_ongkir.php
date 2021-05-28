
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-primary">
				  <div class="panel-heading">
						<h3 class="panel-title">Check Delivery Payment</h3>
					</div>
				  <div class="panel-body">

						<div class="form-group">
							<label for="from_province">From Province </label>
							<select class="form-control" name="from_province" id="from_province">
								<option value="" selected="" disabled="">- Select Province -</option>
								<?php $this->load->view('rajaongkir/getProvince2'); ?>
							</select>
						</div>

						<div class="form-group">
							<label for="from_city">From City </label>
							<select class="form-control" name="from_city" id="origin">
								<option value="" selected="" disabled="">- Select City -</option>
							</select>
						</div>

						<div class="form-group">
							<label for="to_province">To Province </label>
							<select class="form-control" name="to_province" id="to_province">
								<option value="" selected="" disabled="">- Select Province -</option>
								<?php $this->load->view('rajaongkir/getProvince'); ?>
							</select>
						</div>

						<div class="form-group">
							<label for="to_city">To City </label>
							<select class="form-control" name="destination" id="destination">
								<option value="" selected="" disabled="">- Select City -</option>
							</select>
					  </div>

						<div class="form-group">
							<label for="courier">Courier </label>
							<select class="form-control" name="courier" id="courier">
								<option value="">- Select Courier -</option>
								<option value="jne">JNE</option>
								<option value="pos">POS</option>
								<option value="tiki">TIKI</option>
							</select>
						</div>

						<div class="form-group">
							<label for="weight">Weight (gram)</label>
							<input type="text" class="form-control" name="weight" id="weight" value="100">
						</div>

						<div class="form-group">
					    <button type="button" onclick="tampil_data('data')" class="btn btn-success">Check In</button>
						</div>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Delivery Payment List</h3>
					</div>
					<div class="panel-body">
						<div id="hasil"></div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="row">
				<div class="col-md-4">
					<p class="text-center">Copyright © <?php echo date('Y') ?> <a href="#">Maulana Hidayat</a></p>
					<a href="<?=base_url('dashboard');?>" class="btn btn-primary">Kembali</a>
				</div>
			</div>
		</footer>
	</div>
</div><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
function tampil_data(act) {
	var w = $('#origin').val();
	var x = $('#destination').val();
	var y = $('#weight').val();
	var z = $('#courier').val();

	$.ajax({
			url: "rajaongkir/getCost",
			type: "GET",
			data : {origin: w, destination: x, berat: y, courier: z},
			success: function (ajaxData) {
					$("#hasil").html(ajaxData);
			}
	});
};

$(document).ready(function() {
	$("#from_province").click(function() {
		$.post("<?php echo base_url(); ?>rajaongkir/getCity/"+$('#from_province').val(),function(obj) {
			$('#origin').html(obj);
		});			
	});

	$("#to_province").click(function() {
		$.post("<?php echo base_url(); ?>rajaongkir/getCity/"+$('#to_province').val(),function(obj) {
			$('#destination').html(obj);
		});			
	});
});
</script>
