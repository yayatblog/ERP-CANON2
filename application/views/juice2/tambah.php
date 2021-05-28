
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Tambah Data</h2>
            <form action="" class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="" class="form-control" autofocus="on" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
            
                <div class="form-group">
                    <label for="">Lokasi</label>
                    <input type="text" name="lokasi" placeholder="Masukkan nama gudang" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('lokasi');?></span></small>
                </div>
        
                <div class="form-group">
                    <label for="">Point</label>
                    <input type="text" name="point" placeholder="" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('point');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Omzet</label>
                    <input type="text" name="omzet" placeholder="" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('omzet');?></span></small>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('gudang');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>