<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <h2>Untuk Penjualan</h2>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">Kode Barang</label>
                <input type="text" class="form-control" id="inputKode" name="kode" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputBarang">Nama Barang</label>
                <input type="text" class="form-control" id="inputBarang" name="nama" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSabtu">Harga Manager</label>
                <input type="text" class="form-control" id="inputSabtu" name="harga_manager" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputMinggu">Total Pcs</label>
                <input type="text" class="form-control" id="inputMinggu" name="total_pcs" required>
                </div>
            </div>
                <h2>Untuk pemasukan/pengeluaran</h2>
            
                <div class="form-group">
                <!-- <div class="form-group col-md-6"> -->
                <label for="inputPoin">Keterangan</label>
                <input type="text" class="form-control" id="inputPoin" name="keterangan" required>
                </div>

                <div class="form-group">
                <!-- <div class="form-group col-md-6"> -->
                <label for="inputPoin">Debit</label>
                <input type="text" class="form-control" id="inputPoin" name="debit" required>
                </div>
          
                <div class="form-group">
                <!-- <div class="form-group col-md-6"> -->
                <label for="inputPoin">Kredit</label>
                <input type="text" class="form-control" id="inputPoin" name="kredit" required>
                </div>
                <!-- <div class="form-group col-md-6"> -->
                <!-- <label for="inputStok">Stok Awal</label> -->
                <!-- <input type="text" class="form-control" id="inputStok" name="qty" required> -->
                <!-- </div> -->

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('sales_sum');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>