<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">
  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Product Chart <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Product Chart <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row mt-3">
    <div class="col-lg-4">
        <button class="btn btn-success">Export</button>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-4">
        <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weekending</label>
                </div>
                <select class="form-control" id="weekending" onchange="getData(this.value, $('#jabatan').val(), $('#gudang').val())">
                    <option>Pilih tanggal</option>
                    <option value="up">Weekending Up</option>
                    <?php foreach ($tgl as $weekending): ?>
                    <option value="<?= $weekending['tgl']; ?>"><?= $weekending['tgl']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
    </div>
    <div class="col-lg-4">
    <form action="" method="post">
    <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="jabatan">Jabatan</label>
                </div>
                <select class="form-control" id="jabatan" onchange="getData($('#weekending').val(), this.value, $('#gudang').val())">
                    <option>Pilih jabatan</option>
                    <?php foreach ($jbtn as $jabatan): ?>
                    <option value="<?= $jabatan['nama_jabatan']; ?>"><?= $jabatan['nama_jabatan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
    </div>
    <div class="col-lg-4">
    <form action="" method="post">
    <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="gudang">Kantor</label>
                </div>
                <select class="form-control" id="gudang" onchange="getData($('#weekending').val(), $('#jabatan').val(), this.value)">
                    <option>Pilih kantor</option>
                    <?php foreach ($gdg as $gudang): ?>
                    <option value="<?= $gudang['nama']; ?>"><?= $gudang['nama']." - ".$gudang['alamat']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
    </div>
</div>
<!-- <a href="<?= base_url('product_chart/tambah');?>" class="btn btn-primary mb-2">Tambah Data</a> -->
<!-- <a href="<?= base_url('product_chart/export');?>" class="btn btn-danger mb-2">Export PDF</a> -->


<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Nama</th>
                <th>Manager</th>
                <th>Omzet Sabtu</th>
                <th>Omzet Minggu</th>
                <th>Omzet Senin</th>
                <th>Omzet Selasa</th>
                <th>Omzet Rabu</th>
                <th>Omzet Kamis</th>
                <th>Omzet Jum'at</th>
                <th>Total Omzet</th>
                <th>Total Poin</th>
            </tr>
        </thead>
        <tbody id="show_data">
        </tbody>
    </table>
    </div>
</div>

<script>
    
    getData('-', '-', '-');

    function getData(weekending, jabatan, gudang) {

        $.ajax({
            url: "<?= base_url('product_chart/getData/'); ?>" + weekending + "/" + jabatan + "/" + gudang,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                if (!results[0]) {
                    data += `<tr><td colspan="12" class="text-center">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending, jabatan dan gudang untuk menampilkan data.</td></tr>`;
                } else {
                    for (let i = 0; i < results.length; i++) {
                        data += `
                        <tr>
                        <td style="text-align:center">
                        ${i+1}
                        </td>
                        <td width="">
                        ${results[i].nama}
                        </td>
                        <td width="">
                        ${results[i].manager}
                        </td>
                        <td>
                        ${results[i].omzet_sabtu}
                        </td>
                        <td>
                        ${results[i].omzet_minggu}
                        </td>
                        <td>
                        ${results[i].omzet_senin}
                        </td>
                        <td class="">
                        ${results[i].omzet_selasa}                    
                        </td>
                        <td class="">
                        ${results[i].omzet_rabu}                    
                        </td>
                        <td class="">
                        ${results[i].omzet_kamis}                    
                        </td>
                        <td class="">
                        ${results[i].omzet_jumat}                    
                        </td>
                        <td class="">
                        ${results[i].total_omzet}                    
                        </td>
                        <td class="">
                        ${results[i].total_poin}                    
                        </td>
                        </tr>
                        `;
                    }
                }


                $('#show_data').html(data);
            }
        });
    }

</script>