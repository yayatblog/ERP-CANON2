<!-- <style>
    label {
        color: white;
    }
</style> -->
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Tambah Data</h2>
            <form action="" class="form-horizontal" method="POST">
           
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Tanggal</label>
                    <input type="date" name="tgl"  class="form-control">
                    <small><span class="text-danger"><?=form_error('tgl');?></span></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Manager</label>
                    <input type="text" name="manager" placeholder="Masukkan Manager" class="form-control">
                    <small><span class="text-danger"><?=form_error('manager');?></span></small>
                </div>
                </div>
                <div class="form-group">
                    <label for="">Cabang</label>
                    <input type="text" name="cabang" placeholder="Masukkan Cabang" class="form-control">
                    <small><span class="text-danger"><?=form_error('cabang');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Deposit</label>
                    <input type="text" name="jumlah_deposit" placeholder="Masukkan Jumlah Deposit" class="form-control">
                    <small><span class="text-danger"><?=form_error('jumlah_deposit');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Pengeluaran</label>
                    <input type="text" name="jumlah_pengeluaran" placeholder="Masukkan Jumlah Pengeluaran" class="form-control">
                    <small><span class="text-danger"><?=form_error('jumlah_pengeluaran');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Total Deposit</label>
                    <input type="text" name="total_deposit" placeholder="Masukkan Total Deposit" class="form-control">
                    <small><span class="text-danger"><?=form_error('total_deposit');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" placeholder="Masukkan Status" class="form-control">
                    <small><span class="text-danger"><?=form_error('status');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('deposit');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>