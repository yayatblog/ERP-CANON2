<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Edit Data</h2>
            <form action="" class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="">Nama Distributor</label>
                    <input type="text" name="nama" placeholder="Masukkan nama distributor" class="form-control">
                    <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Lokasi</label>
                    <input type="text" name="location" placeholder="Masukkan lokasi" class="form-control">
                    <small><span class="text-danger"><?=form_error('location');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Manager</label>
                    <input type="text" name="manager" placeholder="Masukkan nama Manager" class="form-control">
                    <small><span class="text-danger"><?=form_error('manager');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Profit</label>
                    <input type="text" name="profit" placeholder="Masukkan Profit" class="form-control">
                    <small><span class="text-danger"><?=form_error('profit');?></span></small>
                </div>
            
                <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
                <a href="<?=base_url('distri');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>