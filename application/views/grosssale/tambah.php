
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Tambah Data</h2>
            <form action="" class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="">Manager</label>
                    <input type="text" name="manager" placeholder="Masukkan Manager" class="form-control" autofocus="on" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('manager');?></span></small>
                </div>
            
                <div class="form-group">
                    <label for="">Lokasi</label>
                    <input type="text" name="lokasi" placeholder="Masukkan lokasi" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('lokasi');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Gross Sale</label>
                    <input type="text" name="gross_sale" placeholder="Masukkan Gross Sales" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('gross_sale');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Profit</label>
                    <input type="text" name="profit" placeholder="Masukkan Profit" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('profit');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">PCS</label>
                    <input type="text" name="pcs" placeholder="Masukkan PCS" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('pcs');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Point</label>
                    <input type="text" name="point" placeholder="Masukkan Point" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('point');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('gross_Sale');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>