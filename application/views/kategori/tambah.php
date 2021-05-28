<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Tambah Data</h2>
            <form action="<?= base_url('kategori/tambah');?>" class="form-horizontal" method="POST">
            <div class="form-group">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="KTG-<?php echo sprintf("%04s", $kode) ?>" readonly>
                    

                    <!-- <input type="text" name="kode" placeholder="Masukkan Kategori" class="form-control"> -->
                    <small><span class="text-danger"><?=form_error('kode');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" name="name" id="name" placeholder="Masukkan Kategori" class="form-control">
                    <small><span class="text-danger"><?=form_error('name');?></span></small>
                </div>
                
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="description" id="description" placeholder="Masukkan Deskripsi" class="form-control">
                    <small><span class="text-danger"><?=form_error('description');?></span></small>
                </div>
            
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('kategori');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>