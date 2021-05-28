<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Tambah Data</h2>
            <form action="" class="form-horizontal" method="POST">
            <div class="form-group">
                    <label for="">Tgl</label>
                    <input type="date" name="tgl" placeholder="" class="form-control">
                    <small><span class="text-danger"><?=form_error('tgl');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">No Faktur</label>
                    <input type="text" name="no_faktur" placeholder="Masukkan Nomor Faktur" class="form-control">
                    <small><span class="text-danger"><?=form_error('no_faktur');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Transaksi</label>
                    <input type="text" name="transaksi" placeholder="Masukkan Transaksi" class="form-control">
                    <small><span class="text-danger"><?=form_error('transaksi');?></span></small>
                </div>
                
                <div class="form-group">
                    <label for="">Jumlah</label>
                    <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control">
                    <small><span class="text-danger"><?=form_error('jumlah');?></span></small>
                </div>
            
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('pendapatan');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>