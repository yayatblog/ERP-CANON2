<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Edit Data</h2>
            <form action="" class="form-horizontal" method="POST">
            <input type="hidden" name="id" class="form-control" value="<?= $kategori['id'];?>">
                <div class="form-group">
                    <label for="">Kode</label>
                    <input type="text" name="kode" placeholder="Masukkan Kategori" class="form-control" value="<?= $kategori['kode'];?>">
                    <small><span class="text-danger"><?=form_error('kode');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <input type="text" name="name" placeholder="Masukkan Kategori" class="form-control" value="<?= $kategori['name'];?>">
                    <small><span class="text-danger"><?=form_error('name');?></span></small>
                </div>
                
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="description" placeholder="Masukkan Deskripsi" class="form-control" value="<?= $kategori['description'];?>">
                    <small><span class="text-danger"><?=form_error('description');?></span></small>
                </div>
            
                <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
                <a href="<?=base_url('kategori');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>