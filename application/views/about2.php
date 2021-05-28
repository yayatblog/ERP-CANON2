
<div class="container">
        <div class="col-md-6">
            <h2 class="">Data Perusahaan</h2>
            <form action="" class="form-horizontal" method="POST">
            <input type="hidden" name="id" class="form-control" value="">
            <div class="form-row">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="nama"  value="<?php foreach ($profile as $usr): ?> <?php echo $usr['nama'] ?> <?php endforeach; ?>">
                
            </div>

                <div class="form-row">
                <label for="inputAnak">Deskripsi</label>
                <textarea type="text" class="form-control" id="inputAnak" name="jumlah_anak" style="height: 100px;"><?php foreach ($profile as $usr): ?> <?php echo $usr['telepon'] ?> <?php echo $usr['alamat'] ?> <?php endforeach; ?></textarea>
                
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Masukkan Gaji Pokok" class="form-control" autocomplete="off" value="<?php foreach ($profile as $usr): ?> <?php echo $usr['email'] ?> <?php endforeach; ?>">
                </div>
                
                
                
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <a href="<?=base_url('about2');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>