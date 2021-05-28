
<div class="">
        <div class="col-md-6">
            <!-- <h2 class="">Form Ubah Data</h2> -->
            <form action="" class="form-horizontal" method="POST">
            <input type="hidden" name="id" value="<?= $gudang['id'];?>">

            <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" placeholder="" class="form-control" autofocus="on" autocomplete="off" value="<?= $gudang['kode'];?>">
                    <small><span class="text-danger"><?=form_error('kode');?></span></small>
                </div>
            
                <div class="form-group">
                    <label for="">Nama Gudang</label>
                    <input type="text" name="nama" placeholder="" class="form-control" autocomplete="off" value="<?= $gudang['nama'];?>">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="" class="form-control" autocomplete="off" value="<?= $gudang['alamat'];?>">
                    <small><span class="text-danger"><?=form_error('alamat');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Ubah Data</button>
                <a href="<?=base_url('gudang');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>