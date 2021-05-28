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
                <label for="jenis_kendaraan">Jenis Kendaraan</label>
                <input type="text" class="form-control" id="jenis_kendaraan" placeholder="" name="jenis_kendaraan">
            </div>
            <div class="form-group">
                <label for="nama">No Polisi</label>
                <input type="text" class="form-control" id="no_polisi" placeholder="" name="no_polisi">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="nama_driver">Nama Driver</label>
                <input type="text" class="form-control" id="nama_driver" name="nama_driver" required>
                </div>
                <div class="form-group col-md-6">
                <label for="nama_expedisi">Nama Expedisi</label>
                <select name="nama_expedisi" id="" class="form-control">
                    <option value=""></option>
                    <option value="">JNE</option>
                    <option value="">J&T</option>
                </select>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" required>
            </div>
            <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gudang_asal">Gudang Asal</label>
                <input type="text" class="form-control" id="gudang_asal" name="gudang_asal" required>
                </div>
            <div class="form-group col-md-6">
                <label for="gudang_tujuan">Gudang Tujuan</label>
                <input type="text" class="form-control" id="gudang_tujuan" name="gudang_tujuan" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="qty_rusak">Qty Rusak</label>
                <input type="text" class="form-control" id="qty_rusak" name="qty_rusak" required>
                </div>
            <div class="form-group col-md-6">
                <label for="jumlah_karton">Jumlah Karton</label>
                <input type="text" class="form-control" id="jumlah_karton" name="jumlah_karton" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="isi_karton">Isi Karton</label>
                <input type="text" class="form-control" id="isi_karton" name="isi_karton" required>
                </div>
            <div class="form-group col-md-6">
                <label for="qty_return">QTY Return</label>
                <input type="text" class="form-control" id="qty_return" name="qty_return" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Transfer</button>
            <a href="<?= base_url('barang2');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>