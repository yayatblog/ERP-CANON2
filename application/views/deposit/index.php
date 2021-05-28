<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">


  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Deposit <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Deposit <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row">
<div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Weekending Up :</label>
                    </div>
                    <select name="weekending" id="weekending" class="form-control">
                        <option value="">Pilih tanggal</option>
                        <option value="up">Weekending Up</option>
                    </select>
                </div>
                
                
            </form>
        </div>
        <div class="col-lg-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Jabatan :</label>
                    </div>
                    <select name="jabatan" id="jabatan" class="form-control">
                        <option value="">Pilih jabatan</option>
                        <option value="Vice President">Vice President</option>
                        <option value="Divisional Manager">Divisional Manager</option>
                        <option value="Branch Manager">Branch Manager</option>
                        <option value="Tenant Manager">Tenant Manager</option>
                        <option value="Asistant Manager">Asistant Manager</option>
                        <option value="Win2 Manager">Win2 Manager</option>
                    </select>
                </div>
        </div>
</div>
<div class="row">
<div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Presentase:</label>
                    </div>
                        <input type="text" name="persentase" id="persentase" class="form-control mt-2" value="100%">
                </div>
                
                
            </form>
        </div>
        <div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Deposit :</label>
                    </div>
                    <input type="text" name="deposit" id="deposit" class="form-control mt-2" readonly>
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Pengeluaran :</label>
                    </div>
                    <input type="text" name="pengeluaran" id="pengeluaran" class="form-control mt-2" readonly>
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Grand Total :</label>
                    </div>
                    <input type="text" name="grand_total" id="grand_total" class="form-control mt-2" readonly>
                </div>
                
            </form>
        </div>
</div>
<a href="<?= base_url('deposit/tambah');?>" class="btn btn-info mb-2 mt-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center;">
                <th>No.</th>
                <th>Tanggal</th>
                <th>Manager</th>
                <th>Cabang</th>
                <th>Jumlah Deposit</th>
                <th>Jumlah Pengeluaran</th>
                <th>Total Deposit</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="show_data">
            <tr>
                <td colspan="9" class="text-center">Tidak ada data ditampilkan.</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<script>

    $('.datepicker').datepicker();

    allData();

    $('#jabatan').on('change', function() {
        allData();
    });

    $('#weekending').on('change', function() {
        allData();
    });

    function allData() {
        let jabatan = $('#jabatan').val() == "" ? "" : $('#jabatan').val();
        let weekending = $('#weekending').val() == "" ? "0" : $('#weekending').val();
        let fetchUrl = "deposit/tampil_data/" + weekending + "/" + jabatan;
        let fetchUrlDeposit = "deposit/tampil_deposit/" + weekending + "/" + jabatan;

        $.ajax({
            url: "<?= base_url(); ?>" + fetchUrlDeposit,
            success: function(result) {
                let results = JSON.parse(result);
                $('#deposit').val(rupiahConverter.format(results[0].grand_total));
                $('#pengeluaran').val(rupiahConverter.format(results[0].pengeluaran));
                $('#grand_total').val(rupiahConverter.format(results[0].grand_total));
            }
        });

        $.ajax({
            url: "<?= base_url(); ?>" + fetchUrl,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                console.log(results);

                if (!results[0]) {
                    data = `<tr><td colspan="9" class="text-center">Tidak ada data ditampilkan.</td></tr>`;
                } else {
                    for (let i = 0; i < results.length; i++) {
                        data += `<tr>
                        <td class="text-center">
                        ${i+1}
                        </td>
                        <td class="text-center">
                        ${results[i].tgl = results[i].tgl == "up" ? "<?= date('Y-m-d'); ?>" : results[i].tgl}
                        </td>
                        <td class="text-center">
                        ${results[i].manager}
                        </td>
                        <td class="text-center">
                        ${results[i].cabang}
                        </td>
                        <td class="text-center">
                        ${results[i].jumlah_deposit}
                        </td>
                        <td class="text-center">
                        ${results[i].jumlah_pengeluaran}
                        </td>
                        <td class="text-center">
                        ${results[i].total_deposit}
                        </td>
                        <td class="text-center">
                        <a href="<?= base_url(); ?>deposit/changestatus/${results[i].id}/${results[i].status == "N" ? "Y" : "N"}" class="text-center btn ${results[i].status == "N" ? "btn-danger" : "btn-success"} mt-2">
                        <i class="fas ${results[i].status == "N" ? "fa-times" : "fa-check"}"></i>
                        </a>
                        </td>
                        <td class="text-center">
                        <a href="<?= base_url(); ?>deposit/hapus/${results[i].id}" class="btn btn-danger mt-2" style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                        </td>
                        </tr>`;
                    }
                }

                $('#show_data').html(data);
                // $('#grand_total').val(results);
            }
        });
    }

    $('#kode').on('change', function() {
      let barang = $('#kode').val();
      let fetchUrl = "manager2/barang/" + barang;

      $.ajax({
            url: "<?= base_url(); ?>" + fetchUrl,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                $('#nama').val(results[0].nama);
                $('#stok').val(results[0].qty);
                $('#ftc').val(results[0].hargasetoran);
            }
        });
    });



</script>