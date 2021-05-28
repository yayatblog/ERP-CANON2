<!-- <style>
    label {
        color: white;
    }
</style> -->
<div class="container">
        <div class="col-md-6">
            <h2>Form Tambah Data</h2>
            <form action="<?= base_url('supplier/tambah');?>" class="form-horizontal" method="POST">
            <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="SPL<?php echo sprintf("%03s", $kode) ?>" readonly>
                    <!-- <input type="text" class="form-control" id="rent_no" name="rent_no"> -->
                    <!-- </div> -->
                    <!-- <input type="text" name="kode" placeholder="Masukkan Kode" class="form-control"> -->
                    <small><span class="text-danger"><?=form_error('kode');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan nama" class="form-control">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                    <small><span class="text-danger"><?=form_error('alamat');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" name="telepon" placeholder="Masukkan nomor telepon" class="form-control">
                    <small><span class="text-danger"><?=form_error('telepon');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('supplier');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>