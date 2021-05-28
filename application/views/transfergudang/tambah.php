<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNama">Tanggal</label>
                <input type="date" class="form-control" id="inputNama" name="tgl" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputManager">No. Transfer</label>
                <input type="text" class="form-control" id="inputManager" name="no_transfer" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputPoin">Keterangan</label>
                <input type="text" class="form-control" id="inputPoin" name="keterangan" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTeam">Kode</label>
                <input type="text" class="form-control" id="inputTeam" name="kode" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputPeringkat">Barang</label>
                <input type="text" class="form-control" id="inputPeringkat" name="barang" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputPeringkat2">Gudang Asal</label>
                <input type="text" class="form-control" id="inputPeringkat2" name="gudang_asal" required>
                </div>
            </div>
                 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputLeader">Gudang Tujuan</label>
                <input type="text" class="form-control" id="inputLeader" name="gudang_tujuan" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputDistri">Qty</label>
                <input type="text" class="form-control" id="inputDistri" name="qty" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('transfer_gudang');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>