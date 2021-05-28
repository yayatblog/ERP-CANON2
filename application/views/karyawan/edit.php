<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Edit</h5>

        <form action="" method="POST"> 
            <input type="hidden" name="id" class="form-control" value="<?= $karyawan['id'];?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">ID</label>
                <input type="text" class="form-control" id="inputKode" name="kode_id"  value="<?= $karyawan['kode_id'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="nama"  value="<?= $karyawan['nama'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputTgl">Tgl Lahir</label>
                <input type="date" class="form-control" id="inputTgl" name="tgl_lahir"  value="<?= $karyawan['tgl_lahir'];?>">
                </div>
                <div class="form-group col-md-4">
                <label for="inputJabatan">Jabatan</label>
                <select name="jabatan" id="jabatan" class="form-control">
                    <?php foreach ($jabatan as $pr) :?>
                        <?php if ($pr == $pilih['jabatan']) :?>
                    <option value="<?=$pr;?>" selected><?=$pr;?></option>
                        <?php else :?>
                    <option value="<?=$pr;?>"><?=$pr;?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                <label for="inputTahun">Thn Gabung</label>
                <input type="text" class="form-control" id="inputTahun" name="thn_gabung"  value="<?= $karyawan['thn_gabung'];?>">
                </div>
            </div>
                <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" name="alamat"  value="<?= $karyawan['alamat'];?>">
                </div>
     
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKota">Kota</label>
                <input type="text" class="form-control" id="inputKota" name="kota"  value="<?= $karyawan['kota'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputTelepon">No Telp</label>
                <input type="text" class="form-control" id="inputTelepon" name="no_telp"  value="<?= $karyawan['no_telp'];?>">
                </div>
            </div>
        
                <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="email" value="<?= $karyawan['email'];?>">
                </div>
               

            <button type="submit" class="btn btn-primary">Edit Data</button>
            <a href="<?= base_url('karyawan');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>