<div class="container">
    <div class="row mt-3">
    <div class="col-md 6">
    <div class="card">
    <div class="btn btn-info mb-2">
        Detail Data Karyawan
    </div>
    <div class="card header">
    <h5 class="card-title">Nama : <?= $karyawan['nama'];?>
    <h6 class="card-subtitle mb-2 text-muted">Tempat/Tgl Lahir : <?= $karyawan['ttl'];?></h6>
    <p class="card-text">Jabatan : <?= $karyawan['jabatan'];?></p>
    <p class="card-text">Alamat : <?= $karyawan['alamat'];?></p>
    <p class="card-text">Lama Bekerja : <?= $karyawan['lama_bekerja'];?></p>
    <p class="card-text">Gaji : <?= $karyawan['gaji'];?></p>
    <p class="card-text">Tunjangan : <?= $karyawan['tunjangan'];?></p>
    <p class="card-text">Potongan : <?= $karyawan['potongan'];?></p>
    <p class="card-text">Cuti : <?= $karyawan['cuti'];?></p>
    <p class="card-text">Absen : <?= $karyawan['absen'];?></p>

    </div>
    </div>
    <a href="<?= base_url('karyawan');?>" class="btn btn-primary">Kembali</a>

    </div>
    </div>
</div>