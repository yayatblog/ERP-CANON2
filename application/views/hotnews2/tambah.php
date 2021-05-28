<div class="container">
<div class="col-md-6">

    <h2 style="margin-left:70px">Form Tambah Data</h2>
    <form action="" method="post" enctype="multipart/form-data" >

	<div class="form-group">
	<label for="name">Image</label>
	<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
	type="file" name="image" />
	<div class="invalid-feedback">
	<?php echo form_error('image') ?>
	</div>
	</div>

    <div class="form-group">
	<label for="name">Nama</label>
	<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
	type="text" name="nama" placeholder="Masukkan nama" />
	<div class="invalid-feedback">
    <?php echo form_error('nama') ?>
	</div>
	</div>

	<div class="form-group">
	<label for="price">Manager</label>
	<input class="form-control <?php echo form_error('manager') ? 'is-invalid':'' ?>"
	type="text" name="manager" min="0" placeholder="Masukkan Subject" />
	<div class="invalid-feedback">
	<?php echo form_error('manager') ?>
	</div>
    </div>

	<div class="form-group">
	<label for="name">Subject</label>
	<input class="form-control <?php echo form_error('subject') ? 'is-invalid':'' ?>"
    type="text" name="subject" placeholder="Masukkan Subject" />
	<div class="invalid-feedback">
	<?php echo form_error('subject') ?>
	</div>
	</div>

    <div class="form-group">
	<label for="name">Date</label>
	<input class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>"
    type="date" name="date" placeholder="" />
	<div class="invalid-feedback">
	<?php echo form_error('date') ?>
	</div>
	</div>

	<input class="btn btn-success" type="submit" name="btn" value="Save" />
    <a href="<?=base_url("hot_news");?>" class="btn btn-info">Kembali</a>
	</form>
</div>
</div>