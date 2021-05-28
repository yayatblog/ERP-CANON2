
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Edit Data</h2>
            <form action="" class="form-horizontal" method="POST">
            <input type="hidden" name="id" class="form-control" value="<?= $gaji['id'];?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="nama"  value="<?= $gaji['nama'];?>">
                <small><span class="text-danger"><?=form_error('nama');?></span></small>
                </div>
                <div class="form-group col-md-6">
                <label for="inputJabatan">Jabatan</label>
                <input type="text" class="form-control" id="inputJabatan" name="jabatan"  value="<?= $gaji['jabatan'];?>">
                <small><span class="text-danger"><?=form_error('jabatan');?></span></small>
                </div>
            </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAnak">Jumlah Anak</label>
                <input type="text" class="form-control" id="inputAnak" name="jumlah_anak"  value="<?= $gaji['jumlah_anak'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputBarang">Status</label>
                <input type="text" class="form-control" id="inputBarang" name="status"  value="<?= $gaji['status'];?>">
                </div>
                </div>
                <div class="form-group">
                    <label for="">Gaji Pokok</label>
                    <input type="text" name="gapok" placeholder="Masukkan Gaji Pokok" class="form-control" autocomplete="off" value="<?= $gaji['gapok'];?>">
                    <small><span class="text-danger"><?=form_error('gapok');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Tunjangan Jabatan</label>
                    <input type="text" name="tunjangan_jabatan" placeholder="Masukkan Tunjangan Jabatan" class="form-control" autocomplete="off" value="<?= $gaji['tunjangan_jabatan'];?>">
                    <small><span class="text-danger"><?=form_error('tunjangan_jabatan');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Gaji Diterima</label>
                    <input type="text" name="gaji_diterima" placeholder="Gaji Diterima" class="form-control" autocomplete="off" value="<?= $gaji['gaji_diterima'];?>">
                    <small><span class="text-danger"><?=form_error('gaji_diterima');?></span></small>
                </div>
                
                <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
                <a href="<?=base_url('gaji');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>