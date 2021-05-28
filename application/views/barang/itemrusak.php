<div class="container">
    <div class="col-md-6">
        <form action="" method="POST"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="tgl">Tanggal</label>
                <input type="date" class="form-control" id="tgl" name="tgl" required>
                </div>
                <div class="form-group col-md-6">
                <label for="no_transfer">No. transfer</label>
                <input type="text" class="form-control" id="no_transfer" name="no_transfer" required>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" placeholder="" name="keterangan">
            </div>
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" placeholder="" name="kode">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="" name="nama">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="gudang_asal">Gudang Asal</label>
                <input type="text" class="form-control" id="gudang_asal" name="gudang_asal" required>
                </div>
     
                <div class="form-group col-md-6">
                <label for="gudang_tujuan">Gudang Tujuan</label>
                <select name="gudang_tujuan" id="" class="form-control">
                    <option value=""></option>
                    <option value="">Gudang A</option>
                    <option value="">Gudang B</option>
                </select>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="qty_asal">QTY Asal</label>
                <input type="text" class="form-control" id="qty_asal" name="qty_asal" required>
            </div>
            <div class="form-group col-md-6">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" name="isi" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="jumlah_karton">Jumlah Karton</label>
                <input type="text" class="form-control" id="jumlah_karton" name="jumlah_karton" required>
                </div>
            <div class="form-group col-md-6">
                <label for="qty">QTY Transfer</label>
                <input type="text" class="form-control" id="qty" name="qty" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Transfer</button>
            <a href="<?= base_url('barang2');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>