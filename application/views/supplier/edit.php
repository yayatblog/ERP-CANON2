<!-- <style>
    label {
        color: white;
    }
</style> -->
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Edit Data</h2>
            <form action="" class="form-horizontal" method="POST">
            <input type="hidden" name="id" class="form-control" value="<?= $supplier['id'];?>">
            <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" placeholder="Masukkan Kode" class="form-control" value="<?= $supplier['kode'];?>">
                    <small><span class="text-danger"><?=form_error('kode');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" placeholder="Masukkan nama" class="form-control" value="<?= $supplier['nama'];?>">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control" value="<?= $supplier['alamat'];?>">
                    <small><span class="text-danger"><?=form_error('alamat');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" name="telepon" placeholder="Masukkan nomor telepon" class="form-control" value="<?= $supplier['telepon'];?>">
                    <small><span class="text-danger"><?=form_error('telepon');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
                <a href="<?=base_url('supplier');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>