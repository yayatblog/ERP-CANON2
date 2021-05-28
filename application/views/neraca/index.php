<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<!-- <h2>
    Menu Data Produk
    <div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data Produk..." class="form-control" autocomplete="off">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </div>
        </form>
    </div>
</div>
</h2> -->

  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Produk <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Produk <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<h5 class="text-bold">Neraca Lajur</h5>

<div class="row mt-3">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weekending</label>
                </div>
                <select class="form-control" id="weekending" onchange="getData(this.value)">
                    <option value="-">Pilih tanggal</option>
                    <option value="up">Weekending Up</option><!-- 
                    <?php foreach ($weekending as $week): ?>
                    <option value="<?= $week['tgl']; ?>"><?= $week['tgl']; ?></option>
                    <?php endforeach; ?> -->
                </select>
            </div>
        </form>
    </div>
</div>

<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr class="text-center">
                <th rowspan="2">No.</th>
                <th rowspan="2">Nama Akun</th>
                <th colspan="2" style="border-bottom: none">Neraca Saldo</th>
                <th colspan="2" style="border-bottom: none">J. Penyesuaian</th>
                <th colspan="2" style="border-bottom: none">N. Saldo Disesuaikan</th>
                <th colspan="2" style="border-bottom: none">Laba Rugi</th>
                <th colspan="2" style="border-bottom: none">Neraca</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr class="text-center">
                <th>Debit</th>
                <th>Kredit</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Debit</th>
                <th style="border-right-width: 1px">Kredit</th>
            </tr>
        </thead>
        <tbody id="show_data">
        </tbody>
    </table>
    </div>
</div>

<script>

    getData($('#weekending').val());

    function getData(weekending) {
        $.ajax({
            url: '<?= base_url('neraca/getData/'); ?>' + weekending,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                if (results == "") {
                    data += `<tr><td colspan="13" class="text-center">Tidak ada data ditampilkan.</td></tr>`;
                } else {

                    for (let i = 0; i < results.length; i++) {
                        data += `
                        <tr>
                        <td class="text-center">
                        ${i+1}
                        </td>
                        <td class="text-center">
                        ${results[i].nama}
                        </td>
                        <td class="text-center">
                        -
                        </td>
                        <td class="text-center">
                        -
                        </td>
                        <td width="">
                        </td>
                        <td width="">
                        </td>
                        <td style="text-align:center">

                        <!-- <div class="btn-group" > -->
                        <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        </button>
                        <div class="dropdown-menu"> -->
                        <button onclick="getDataById/${results[i].id}" class="btn btn-success" style=""><i class="fa fa-edit"></i>Edit</i></button>
                        <a href="<?= base_url();?>neraca/hapus/${results[i].id}" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                        <!-- </div> -->
                        <!-- </div> -->
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