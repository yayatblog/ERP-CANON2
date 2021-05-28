<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="<?= base_url('daftar/tambah');?>" method="POST"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="kode_id">ID</label>
                <input type="text" class="form-control" id="kode_id" name="kode_id" value="MT-<?php echo sprintf("%04s", $kode_id) ?>" readonly>

                <!-- <input type="text" class="form-control" id="inputKode" name="kode_id" required> -->
                </div>
                <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
            </div>
            <div class="form-row">
                
                <div class="form-group col-md-4">
                <label for="inputTgl">Tgl Lahir</label>
                <input type="date" class="form-control" id="inputTgl" name="tgl_lahir" required>
                </div>
                <div class="form-group col-md-4">
                 <label for="dosen_pa">Jabatan</label>
                 <select class="form-control" name="jabatan" id="jabatan">
                 <option value="">-- Pilih --</option>
                 <?php foreach ($jabatan as $j) :?>
                    <option name="jabatan"><?= $j;?></option>
                <?php endforeach;?>
                </select>
             </div>
                <div class="form-group col-md-4">
                <label for="inputPromoter">Promoter</label>
                <input type="text" class="form-control" id="inputPromoter" name="promoter" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputTahun">Tahun Gabung</label>
                <input type="text" class="form-control" id="inputTahun" name="thn_gabung" required>
                </div>
                <div class="form-group col-md-6">
                <label for="dosen_pa">Gudang</label>
                 <select class="form-control" name="gudang" id="gudang">
                 <option value="">-- Pilih --</option>
                 <?php foreach ($gudang as $j) :?>
                    <option name="gudang"><?= $j['nama'];?></option>
                <?php endforeach;?>
                </select>
                </div>
            </div>
                <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" name="alamat" required>
                </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKota">Kota</label>
                <input type="text" class="form-control" id="inputKota" name="kota" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTelepon">Telepon</label>
                <input type="text" class="form-control" id="inputTelepon" name="telepon" required>
                </div>
            </div>
                <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="email" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('daftar');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>