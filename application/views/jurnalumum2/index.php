<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Jurnal Umum <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Jurnal Umum <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<h5 class="text-bold">Jurnal Umum</h5>

<div class="row mt-3">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weekending</label>
                </div>
                <select class="form-control" id="weekending" onchange="getData(this.value)">
                    <option value="">Pilih tanggal</option>
                    <option value="up">Weekending Up</option>
                </select>
            </div>
        </form>
    </div>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="transaksi">Transaksi</label>
                </div>
                <input type="search" class="form-control" id="transaksi" />
            </div>
        </form>
    </div>
</div>

<a href="<?= base_url('jurnalumum/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<a href="" class="btn btn-success mb-2">Export Excel</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr >
                <th>No.</th>
                <th>Tanggal</th>
                <th>Transaksi</th>
                <th>No. Bukti</th>
                <th>Jumlah</th>
                <th>Kode Akun Debit</th>
                <th>Kode Akun Kredit</th>
                <th>Nama Akun Debit</th>
                <th>Didebit</th>
                <th>Nama Akun Kredit</th>
                <th>DiKredit</th>
                <th>Aksi</th>
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
            url: "<?= base_url('jurnalumum2/getData/'); ?>" + weekending,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                for (let i = 0; i < results.length; i++) {
                    data += `<tr>
                    <td width="">
                    ${i+1}
                    </td>
                    <td>
                    ${results[i].tgl}
                    </td>
                    <td width="">
                    ${results[i].transaksi}
                    </td>
                    <td>
                    ${results[i].no_bukti}
                    </td>
                    <td>
                    ${numberFormatter.format(results[i].jumlah)}
                    </td>
                    <td>
                    K-${results[i].kode_debit}
                    </td>
                    <td class="">
                    K-${results[i].kode_kredit}                    
                    </td>
                    <td class="">
                    ${results[i].nama_akundebit}                   
                    </td>
                    <td class="">
                    ${numberFormatter.format(results[i].didebit)}
                    </td>
                    <td class="">
                    ${results[i].nama_akunkredit}
                    </td>
                    <td class="">
                    ${numberFormatter.format(results[i].dikredit)}
                    </td>
                    <td>

                    <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                    </button>
                    <div class="dropdown-menu">
                    <button onclick="getDataById(${results[i].id}) class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></button>
                    <a href="<?= base_url(); ?>jurnalumum2/hapus/${results[i].id}" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                    </div>
                    </td>
                    </tr>`;
                }

                $('#show_data').html(data);
            }
        });
    }
</script>