<div class="container">
<div class="col-md-6">

    <h2 style="margin-left:70px">Form Edit Data</h2>
    <form action="" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?= $hotnews['id'];?>">
	<div class="form-group">
    <img src="<?php echo base_url('upload/product/'.$hotnews['image']) ?>" width="90" style="border-radius:10px;"/>
    <br>
    <br>
	<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
	type="file" name="image" value="<?= $hotnews['image'];?>"/>
	<div class="invalid-feedback">
	<?php echo form_error('image') ?>
	</div>
	</div>

    <div class="form-group">
	<label for="name">Nama</label>
	<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
	type="text" name="nama" placeholder="Masukkan nama" value="<?= $hotnews['nama'];?>"/>
	<div class="invalid-feedback">
    <?php echo form_error('nama') ?>
	</div>
	</div>

	<div class="form-group">
	<label for="price">Manager</label>
	<input class="form-control <?php echo form_error('manager') ? 'is-invalid':'' ?>"
	type="text" name="manager" min="0" placeholder="Masukkan Subject" value="<?= $hotnews['manager'];?>"/>
	<div class="invalid-feedback">
	<?php echo form_error('manager') ?>
	</div>
    </div>

	<div class="form-group">
	<label for="name">Subject</label>
	<input class="form-control <?php echo form_error('subject') ? 'is-invalid':'' ?>"
    type="text" name="subject" placeholder="Masukkan Subject" value="<?= $hotnews['subject'];?>"/>
	<div class="invalid-feedback">
	<?php echo form_error('subject') ?>
	</div>
	</div>

    <div class="form-group">
	<label for="name">Date</label>
	<input class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>"
    type="date" name="date" placeholder="" value="<?= $hotnews['date'];?>"/>
	<div class="invalid-feedback">
	<?php echo form_error('date') ?>
	</div>
	</div>

	<input class="btn btn-success" type="submit" name="btn" value="Save" />
    <a href="<?=base_url("hot_news");?>" class="btn btn-info">Kembali</a>
	</form>
</div>
</div>