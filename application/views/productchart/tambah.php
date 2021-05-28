<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">Nama</label>
                <input type="text" class="form-control" id="inputKode" name="nama" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputBarang">Manager</label>
                <input type="text" class="form-control" id="inputBarang" name="manager" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSabtu">Profit Sabtu</label>
                <input type="text" class="form-control" id="inputSabtu" name="profit_sabtu" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputMinggu">Profit Minggu</label>
                <input type="text" class="form-control" id="inputMinggu" name="profit_minggu" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSenin">Profit Senin</label>
                <input type="text" class="form-control" id="inputSenin" name="profit_senin" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputSelasa">Profit Selasa</label>
                <input type="text" class="form-control" id="inputSelasa" name="profit_selasa" required>
                </div>
            </div>
     
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputRabu">Profit Rabu</label>
                <input type="text" class="form-control" id="inputRabu" name="profit_rabu" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputKamis">Profit Kamis</label>
                <input type="text" class="form-control" id="inputKamis" name="profit_kamis" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputJumat">Profit Jum'at</label>
                <input type="text" class="form-control" id="inputJumat" name="profit_jumat" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTotal">Total Profit</label>
                <input type="text" class="form-control" id="inputTotal" name="total_profit" required>
                </div>
            </div>
            <div class="form-group">
                <!-- <div class="form-group col-md-6"> -->
                <label for="inputPoin">Total Poin</label>
                <input type="text" class="form-control" id="inputPoin" name="total_poin" required>
                </div>
                <!-- <div class="form-group col-md-6"> -->
                <!-- <label for="inputStok">Stok Awal</label> -->
                <!-- <input type="text" class="form-control" id="inputStok" name="qty" required> -->
                <!-- </div> -->

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('product_chart');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>