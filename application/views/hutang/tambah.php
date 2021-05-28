
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Tambah Data</h2>
            <form action="" class="form-horizontal" method="POST">
                <div class="form-group">
                    <label for="">Tgl</label>
                    <input type="date" name="tgl" placeholder="" class="form-control" autofocus="on" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('date');?></span></small>
                </div>
            
                <div class="form-group">
                    <label for="">No. Referensi</label>
                    <input type="text" name="no_referensi" placeholder="Masukkan nama gudang" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('no_referensi');?></span></small>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">Jatuh Tempo</label>
                <input type="date" class="form-control" id="inputKode" name="jatuh_tempo" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputBarang">Mata Uang</label>
                <input type="text" class="form-control" id="inputBarang" name="mata_uang" required>
                </div>
                </div>
                <div class="form-group">
                    <label for="">Debit</label>
                    <input type="text" name="debit" placeholder="" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('debit');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Kredit</label>
                    <input type="text" name="kredit" placeholder="" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('kredit');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Saldo</label>
                    <input type="text" name="saldo" placeholder="" class="form-control" autocomplete="off">
                    <small><span class="text-danger"><?=form_error('saldo');?></span></small>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('gudang');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>