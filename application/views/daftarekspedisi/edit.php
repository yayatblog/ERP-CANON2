<!-- <style>
    label {
        color: white;
    }
</style> -->
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Edit Data</h2>
            <form action="" class="form-horizontal" method="POST">
            <input type="hidden" name="id" class="form-control" value="<?= $daftarekspedisi['id'];?>">

                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" placeholder="Masukkan Kode" class="form-control" value="<?= $daftarekspedisi['kode'];?>">
                    <small><span class="text-danger"><?=form_error('kode');?></span></small>
                </div>
                
                <div class="form-group">
                    <label for="">Nama Ekspedisi</label>
                    <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" value="<?= $daftarekspedisi['nama'];?>">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
                <a href="<?=base_url('ekspedisi');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>