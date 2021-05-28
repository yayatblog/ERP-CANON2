<div class="container">
    <div class="col-md-6">
        <h5>Edit Form Data</h5>

        <form action="" method="POST"> 
        <input type="hidden" name="id" value="<?= $jurnalumum['id'];?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputTgl">TGL</label>
                <input type="date" class="form-control" id="inputTgl" name="tgl"  value="<?= $jurnalumum['tgl'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputTf">TRANSAKSI</label>
                <input type="text" class="form-control" id="inputTf" name="transaksi"  value="<?= $jurnalumum['transaksi'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputBukti">No. Bukti</label>
                <input type="text" class="form-control" id="inputBukti" name="no_bukti"  value="<?= $jurnalumum['no_bukti'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputJumlah">Jumlah</label>
                <input type="text" class="form-control" id="inputJumlah" name="jumlah"  value="<?= $jurnalumum['jumlah'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputDebit">Kode Akun Debit</label>
                <input type="text" class="form-control" id="inputDebit" name="kode_debit"  value="<?= $jurnalumum['kode_debit'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputKredit">Kode Akun Kredit</label>
                <input type="text" class="form-control" id="inputKredit" name="kode_kredit"  value="<?= $jurnalumum['kode_kredit'];?>">
                </div>
            </div>
        
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAdebit">Nama Akun Didebit</label>
                <input type="text" class="form-control" id="inputAdebit" name="nama_akundebit"  value="<?= $jurnalumum['nama_akundebit'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputdebit">Didebit</label>
                <input type="text" class="form-control" id="inputdebit" name="didebit"  value="<?= $jurnalumum['didebit'];?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAkredit">Nama Akun Dikredit</label>
                <input type="text" class="form-control" id="inputAdebit" name="nama_akunkredit"  value="<?= $jurnalumum['nama_akunkredit'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputkredit">Dikredit</label>
                <input type="text" class="form-control" id="inputdebit" name="dikredit"  value="<?= $jurnalumum['dikredit'];?>">
                </div>
            </div>
               

            <button type="submit" class="btn btn-primary">Edit Data</button>
            <a href="<?= base_url('jurnalumum');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>