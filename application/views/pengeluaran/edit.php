<div class="container">
    <div class="col-md-6">
        <h5>Edit Form Data</h5>

        <form action="" method="POST"> 
            <input type="hidden" name="id" value="<?= $pengeluaran['id'];?>">
            <div class="form-group">
                <label for="inputEmail">Tanggal</label>
                <input type="date" class="form-control" id="inputEmail" name="tgl" value="<?= $pengeluaran['tgl'];?>">
                </div>
                <div class="form-group">
                <label for="inputEmail">Uraian</label>
                <input type="text" class="form-control" id="inputEmail" name="uraian" value="<?= $pengeluaran['uraian'];?>">
                </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputTgl">Bukti Transaksi</label>
                <input type="text" class="form-control" id="inputTgl" name="reff" value="<?= $pengeluaran['reff'];?>">
                </div>
                <div class="form-group col-md-4">
                <label for="inputJabatan">Batasan</label>
                <input type="text" class="form-control" id="inputJabatan" name="batasan" value="<?= $pengeluaran['batasan'];?>">
                </div>
                <div class="form-group col-md-4">
                <label for="inputTahun">Jumlah</label>
                <input type="text" class="form-control" id="inputTahun" name="jumlah" value="<?= $pengeluaran['jumlah'];?>">
                </div>
            </div>
                <div class="form-group">
                <label for="inputAlamat">No. Akun</label>
                <input type="text" class="form-control" id="inputAlamat" name="no_akun" value="<?= $pengeluaran['no_akun'];?>">
                </div>
     
            <!-- <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKota">Kota</label>
                <input type="text" class="form-control" id="inputKota" name="kota" >
                </div>
                <div class="form-group col-md-6">
                <label for="inputTelepon">No Telp</label>
                <input type="text" class="form-control" id="inputTelepon" name="no_telp" >
                </div>
            </div> -->
        
                <!-- <div class="form-group">
                <label for="inputEmail">Total</label>
                <input type="text" class="form-control" id="inputEmail" name="total" >
                </div> -->
               

            <button type="submit" class="btn btn-primary">Edit Data</button>
            <a href="<?= base_url('pengeluaran');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>