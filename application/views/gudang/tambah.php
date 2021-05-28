
<div class="">
        <div class="col-md-6">
            <!-- <h2 class="">Form Tambah Data</h2> -->
            <form action="<?= base_url('gudang/tambah');?>" class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" value="G-<?php echo sprintf("%04s", $kode) ?>" readonly>
                    <!-- <input type="text" name="kode" placeholder="Masukkan Kode" class="form-control" autofocus="on" autocomplete="off"> -->
                    <small><span class="text-danger"><?=form_error('kode');?></span></small>
                </div>
            
                <div class="form-group">
                    <label for="">Nama Gudang</label>
                    <input type="text" name="nama" placeholder="Masukkan nama gudang" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('alamat');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('gudang');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>