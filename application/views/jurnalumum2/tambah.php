<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputTgl">TGL</label>
                <input type="date" class="form-control" id="inputTgl" name="tgl" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTf">TRANSAKSI</label>
                <input type="text" class="form-control" id="inputTf" name="transaksi" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputBukti">No. Bukti</label>
                <input type="text" class="form-control" id="inputBukti" name="no_bukti" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputJumlah">Jumlah</label>
                <input type="text" class="form-control" id="inputJumlah" name="jumlah" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputDebit">Kode Akun Debit</label>
                <input type="text" class="form-control" id="inputDebit" name="kode_debit" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputKredit">Kode Akun Kredit</label>
                <input type="text" class="form-control" id="inputKredit" name="kode_kredit" required>
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAdebit">Nama Akun Didebit</label>
                <input type="text" class="form-control" id="inputAdebit" name="nama_akundebit" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputdebit">Didebit</label>
                <input type="text" class="form-control" id="inputdebit" name="didebit" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAkredit">Nama Akun Dikredit</label>
                <input type="text" class="form-control" id="inputAdebit" name="nama_akunkredit" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputkredit">Dikredit</label>
                <input type="text" class="form-control" id="inputdebit" name="dikredit" required>
                </div>
            </div>
               

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('jurnalumum');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>