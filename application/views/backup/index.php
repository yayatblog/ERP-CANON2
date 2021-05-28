<?php 

$value="FirdySoft Creation Inc.Bontang Kalimantan Timur 
Mobile: 0821-81000168 
WhatsApp: 0821-81000168
";





?>
<div class="container">
        <div class="col-md-6">
            <h2 class="">Back Up Database</h2>
            <form action="" class="form-horizontal" method="">
            <input type="hidden" name="id" class="form-control" value="">
            <div class="form-row">
                <label for="inputNama">Backup Database</label>
                <!-- <input type="text" class="form-control" id="inputNama" name="nama"  value="eMLas (Electronic MLM Accounting System)"> -->
                <a href="<?= base_url();?>backup/backupdb"><i class="fa fa-database"></i><span>Backup Database</span></a>
            </div>

                <!-- <div class="form-row">
                <label for="inputAnak">Deskripsi</label>
                <textarea type="text" class="form-control" id="inputAnak" name="jumlah_anak" style="height: 100px;"><?= $value;?></textarea>
                
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Masukkan Gaji Pokok" class="form-control" autocomplete="off" value="admin@firdysoft.com">
                </div> -->
                
                
                
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <a href="<?=base_url('dashboard');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>