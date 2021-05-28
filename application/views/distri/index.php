<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">


  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Juice Distributor <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Juice Distributor <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row mt-3">
    <div class="col-lg-6">
        <!-- <form action="<?= base_url(); ?>juice_distri" method="post"> -->
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weekending</label>
                </div>
                <select class="form-control" id="weekending" name="weekending">
                    <option>Pilih tanggal</option>
                    <option value="up">Weekending Up</option>
                    <?php foreach ($tgl_distri as $tgl): ?>
                    <option value="<?= $tgl['weekending']; ?>"><?= $tgl['weekending']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        <!-- </form> -->
    </div>
    <!-- <div class="col-lg-6">
    <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending"></label>
                </div>
                <input type="text" name="" id="" placeholder="Juice Distributor" class="input-group-text">
            </div>
        </form>
    </div> -->
</div>
<button type="button" data-toggle="modal" data-target="#modalTambah" class="btn btn-info mb-2">Tambah Data</button>

<a href="<?= base_url('juice_distri/export_data');?>" class="btn btn-danger mb-2">Export Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center;">
                <th>No.</th>
                <th>Nama Distributor</th>
                <th>Lokasi</th>
                <th>Manager</th>
                <th>Profit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="show_data">
            <tr>
                <td colspan="6" class="text-center">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending untuk menampilkan data.</td>
            </tr>
        </tbody>
    </table>
    </div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambah" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambah">Tambah data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('juice_distri/tambah'); ?>" class="form-horizontal" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Distributor</label>
            <input type="text" name="nama" placeholder="Masukkan nama distributor" class="form-control">
            <small><span class="text-danger"><?=form_error('nama');?></span></small>
          </div>
          <div class="form-group">
            <label for="">Lokasi</label>
            <input type="text" name="location" placeholder="Masukkan lokasi" class="form-control">
            <small><span class="text-danger"><?=form_error('location');?></span></small>
          </div>
          <div class="form-group">
            <label for="">Manager</label>
            <input type="text" name="manager" placeholder="Masukkan nama Manager" class="form-control">
            <small><span class="text-danger"><?=form_error('manager');?></span></small>
          </div>
          <div class="form-group">
            <label for="">Profit</label>
            <input type="text" name="profit" placeholder="Masukkan Profit" class="form-control">
            <small><span class="text-danger"><?=form_error('profit');?></span></small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEdit">Edit data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('juice_distri/edit'); ?>" class="form-horizontal" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Nama Distributor</label>
            <input type="text" name="nama2" id="nama2" placeholder="Masukkan nama distributor" class="form-control">
            <small><span class="text-danger"><?=form_error('nama');?></span></small>
          </div>
          <div class="form-group">
            <label for="">Lokasi</label>
            <input type="text" name="location2" id="location2" placeholder="Masukkan lokasi" class="form-control">
            <small><span class="text-danger"><?=form_error('location');?></span></small>
          </div>
          <div class="form-group">
            <label for="">Manager</label>
            <input type="text" name="manager2" id="manager2" placeholder="Masukkan nama Manager" class="form-control">
            <small><span class="text-danger"><?=form_error('manager');?></span></small>
          </div>
          <div class="form-group">
            <label for="">Profit</label>
            <input type="text" name="profit2" id="profit2" placeholder="Masukkan Profit" class="form-control">
            <small><span class="text-danger"><?=form_error('profit');?></span></small>
          </div>
            <input type="hidden" name="id" id="id" value=""/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

    function allData() {
        let weekending = $('#weekending').val();
        let fetchUrl = weekending == "" ? "juice_distri/tampil_data" : "juice_distri/tampil_data/" + weekending;

        $.ajax({
            url: "<?= base_url(); ?>" + fetchUrl,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                if (!results[0]) {
                    data = `<tr><td style="text-align:center;" colspan="6">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending untuk menampilkan data.</td></tr>`;
                } else {
                    for (let i = 0; i < results.length; i++) {
                        data += `<tr>
                        <td class="text-center">
                        ${i+1}
                        </td>
                        <td class="text-center">
                        ${results[i].nama}
                        </td>
                        <td class="text-center">
                        ${results[i].location}
                        </td>
                        <td class="text-center">
                        ${results[i].manager}
                        </td>
                        <td class="text-center">
                        ${results[i].profit}
                        </td>
                        <td class="text-center">
                        <button onclick="getData(${results[i].id})" class="btn btn-success mt-2"><i class="fa fa-edit"></i>&nbsp;Edit</button>
                        <a href="<?= base_url();?>juice_distri/hapus/${results[i].id}" class="btn btn-danger mt-2" style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                        </td>
                        </tr>`;
                    }
                }

                $('#show_data').html(data);
            }
        });
    }

    // Fetch data
    $('#weekending').on('change', function() {
      allData();
    });

    function getData(id) {
        let url = "juice_distri/getData/" + id;

        $.ajax({
            url: url,
            success: function(result) {
                let results = JSON.parse(result);

                $('#id').val(results[0].id);
                $('#nama2').val(results[0].nama);
                $('#location2').val(results[0].location);
                $('#manager2').val(results[0].manager);
                $('#profit2').val(results[0].profit);

                $('#modalEdit').modal('show');

            }
        });
    }



</script>