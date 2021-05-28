<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
        <input type="hidden" name="id" class="form-control" value="<?= $return_supplier['id'];?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNama">Tanggal</label>
                <input type="date" class="form-control" id="inputNama" name="tanggal"  value="<?= $return_supplier['tanggal'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputManager">No. Faktur</label>
                <input type="text" class="form-control" id="inputManager" name="no_faktur" value="<?= $return_supplier['no_faktur'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputPoin">Keterangan</label>
                <input type="text" class="form-control" id="inputPoin" name="keterangan" value="<?= $return_supplier['keterangan'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputTeam">Kode</label>
                <input type="text" class="form-control" id="inputTeam" name="kode" value="<?= $return_supplier['kode'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputPeringkat">Barang</label>
                <input type="text" class="form-control" id="inputPeringkat" name="barang" value="<?= $return_supplier['barang'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPeringkat2">Gudang Asal</label>
                <input type="text" class="form-control" id="inputPeringkat2" name="gudang_asal" value="<?= $return_supplier['gudang_asal'];?>">
                </div>
            </div>
                 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputLeader">Supplier Tujuan</label>
                <input type="text" class="form-control" id="inputLeader" name="supplier_tujuan" value="<?= $return_supplier['supplier_tujuan'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputDistri">Jumlah</label>
                <input type="text" class="form-control" id="inputDistri" name="jumlah" value="<?= $return_supplier['jumlah'];?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Edit Data</button>
            <a href="<?= base_url('return_supplier');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>