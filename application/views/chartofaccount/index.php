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
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Account <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Account <strong>berhasil </strong><?= $this->session->flashdata('flash'); ?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<h5 class="text-bold">Chart of Account</h5>

<div class="row mt-3">
    <div class="col-lg-6">
        <div class="form-group input-group input-group-sm">
            <div class="input-group-prepend">
                <label class="input-group-text" for="weekending">Weekending</label>
            </div>
            <select class="form-control" id="weekending">
                <option value="">Semua data</option>
                <option value="up">Weekending Up</option>
                <?php foreach ($tanggal as $tgl) : ?>
                <option value="<?= $tgl['tanggal'] ?>"><?= date("d-m-Y", strtotime($tgl['tanggal'])); ?></option>
                <?php endforeach; ?>
            </select>
            <div class="input-group-append">
                <button type="button" class="btn btn-primary btn-sm" id="tampil_data">Go</button>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group input-group input-group-sm">
            <form action="<?= base_url('account/tutup_buku'); ?>" method="POST">
                <div class="input-group input-group-sm"> 
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="tutup-buku">Tgl Tutup Buku</label>
                    </div>
                    <input type="text" class="form-control datepicker" id="tutup_buku" name="tgl_tutup_buku" data-date-format="dd-mm-yyyy" value="<?= date("d-m-Y"); ?>" style="cursor: default;" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary btn-sm" id="tutup_buku_btn">Tutup Buku</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<button class="btn btn-info mb-2" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr class="text-center">
                <th>No.</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Nominal</th>
                <th>Saldo Awal</th>
                <th>Saldo Akhir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="show_data">
            <tr>
                <td colspan="8" class="text-center">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending lalu klik tombol "Go" untuk menampilkan data.</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('account/tambah'); ?>" class="form-horizontal" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="inputKode">Kode</label>
            <input type="text" class="form-control" id="inputKode" name="kode" required placeholder="Masukkan Kode Akun">
            <small>*Masukkan angka saja (tanpa awalan "K-")</small><br>
          </div>

          <div class="form-group">
            <label for="inputBarang">Nama Akun</label>
            <input type="text" class="form-control" id="inputBarang" name="nama" required placeholder="Masukkan Nama Akun">
          </div>

          <div class="form-group">
            <label class="d-block" for="">Jenis</label>
            <small><span class="text-danger"><?=form_error('jenis');?></span></small>
            <input type="radio" name="jenis" id="" value="Nominal"> Nominal
            &ensp;
            <input type="radio" name="jenis" id="" value="Riel"> Riel
            <small class="d-block">*Silahkan pilih salah satu</small>
          </div>

          <div class="form-group">
            <label class="d-block" for="">Nominal</label>
            <small><span class="text-danger"><?=form_error('nominal');?></span></small>
            <input type="radio" name="nominal" id="" value="Debit"> Debit
            &ensp;
            <input type="radio" name="nominal" id="" value="Kredit"> Kredit
            <small class="d-block">*Silahkan pilih salah satu</small>
          </div>
          <div class="form-group">
            <label for="saldo_default">Saldo Awal</label>
            <input type="text" class="form-control" id="saldo_default" name="saldo_default" required placeholder="Masukkan Saldo Awal">
            <small>*Masukkan angka saja tanpa tanda baca (.,), dan tanpa akhiran (,-)</small><br>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditLabel">Form Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('account/edit'); ?>" class="form-horizontal" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="inputKode">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode2" required placeholder="Masukkan Kode Akun">
            <small>*Masukkan angka saja (tanpa awalan "K-")</small><br>
          </div>

          <div class="form-group">
            <label for="inputBarang">Nama Akun</label>
            <input type="text" class="form-control" id="nama" name="nama2" required placeholder="Masukkan Nama Akun">
          </div>

          <div class="form-group">
            <label class="d-block" for="">Jenis</label>
            <small><span class="text-danger"><?=form_error('jenis');?></span></small>
            <input type="radio" name="jenis2" id="jenis_1" value="Nominal"> Nominal
            &ensp;
            <input type="radio" name="jenis2" id="jenis_2" value="Riel"> Riel
            <small class="d-block">*Silahkan pilih salah satu</small>
          </div>

          <div class="form-group">
            <label class="d-block" for="">Nominal</label>
            <small><span class="text-danger"><?=form_error('nominal');?></span></small>
            <input type="radio" name="nominal2" id="nominal_1" value="Debit"> Debit
            &ensp;
            <input type="radio" name="nominal2" id="nominal_2" value="Kredit"> Kredit
            <small class="d-block">*Silahkan pilih salah satu</small>
          </div>
        </div>
        <input type="hidden" id="id" name="id" value="" />
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    $('.datepicker').datepicker();

    function allData(weekending) {
        let fetchUrl = weekending == "" ? "account/tampil_data" : "account/tampil_data/" + weekending;

        $.ajax({
            url: "<?= base_url(); ?>" + fetchUrl,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                if (!results[0]) {
                    if (weekending == "up") {
                        data = `<tr><td class="text-center" colspan="8">Telah dilakukan proses tutup buku. Silahkan pilih tanggal weekending lalu klik tombol "Go" untuk menampilkan data.</td></tr>`;
                    } else {
                        data = `<tr><td class="text-center" colspan="8">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending lainnya lalu klik tombol "Go" untuk menampilkan data.</td></tr>`;
                    }
                } else {
                    for (let i = 0; i < results.length; i++) {
                        data += `
                        <tr>
                        <td class="text-center">
                        ${i+1}
                        </td>
                        <td class="text-center">
                        K-${results[i].kode}
                        </td>
                        <td class="text-center">
                        ${results[i].nama}
                        </td>
                        <td class="text-center">
                        ${results[i].jenis}
                        </td>
                        <td class="text-center">
                        ${results[i].nominal}
                        </td>
                        <td class="text-center">
                        ${isNaN(results[i].saldo_awal) ? "-" : numberFormatter.format(results[i].saldo_awal)}
                        </td>
                        <td class="text-center">
                        ${isNaN(results[i].saldo_akhir) ? "-" : numberFormatter.format(results[i].saldo_akhir)}
                        </td>

                        <td class="text-center">
                        <button class='btn btn-success' onclick="getDataById(${results[i].id})"><i class='fa fa-edit'></i>Edit</i></button>
                        <a href='<?= base_url('account/hapus'); ?>/${results[i].id}' class='btn btn-danger' style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                        </td>
                        </tr>
                        `;
                    }
                }

                $('#show_data').html(data);
            }
        });
    }

    // Fetch data
    $('#tampil_data').on('click', function() {
      allData($('#weekending').val());
    });

  function getDataById(id) {
    $.ajax({
      url: "<?= base_url('account/getDataById/'); ?>" + id,
      success: function(result) {
        let results = JSON.parse(result);

        $('#kode').val(results.kode);
        $('#nama').val(results.nama);

        if (results.jenis == "Nominal") {
          $('#jenis_1').prop('checked','checked');
        } else {
          $('#jenis_2').prop('checked','checked');
        }

        if (results.nominal == "Debit") {
          $('#nominal_1').prop('checked','checked');
        } else {
          $('#nominal_2').prop('checked','checked');
        }

        $('#id').val(results.id);

        $('#modalEdit').modal('show');
      }
    });
  }
</script>