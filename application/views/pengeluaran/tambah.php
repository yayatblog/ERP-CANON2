<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">Tanggal</label>
                <input type="date" class="form-control" id="inputKode" name="tgl" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputNama">Uraian</label>
                <input type="text" class="form-control" id="inputNama" name="uraian" required>
                </div>
            </div> -->
            <div class="form-group">
                <label for="inputEmail">Tanggal</label>
                <input type="date" class="form-control" id="inputEmail" name="tgl" required>
                </div>
                <div class="form-group">
                <label for="inputEmail">Uraian</label>
                <textarea type="text" class="form-control" id="inputEmail" name="uraian" required></textarea>
                </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputTgl">Bukti Transaksi</label>
                <input type="text" class="form-control" id="inputTgl" name="reff" required>
                </div>
                <div class="form-group col-md-4">
                <label for="inputJabatan">Batasan</label>
                <input type="text" class="form-control" id="inputJabatan" name="batasan" required>
                </div>
                <div class="form-group col-md-4">
                <label for="inputTahun">Jumlah</label>
                <input type="text" class="form-control" id="inputTahun" name="jumlah" required>
                </div>
            </div>
                <div class="form-group">
                <label for="inputAlamat">No. Akun</label>
                <input type="text" class="form-control" id="inputAlamat" name="no_akun" required>
                </div>
     
            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKota">Kota</label>
                <input type="text" class="form-control" id="inputKota" name="kota" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTelepon">No Telp</label>
                <input type="text" class="form-control" id="inputTelepon" name="no_telp" required>
                </div>
            </div> -->
        
                <!-- <div class="form-group">
                <label for="inputEmail">Total</label>
                <input type="text" class="form-control" id="inputEmail" name="total" required>
                </div> -->
               

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('penerimaan');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>