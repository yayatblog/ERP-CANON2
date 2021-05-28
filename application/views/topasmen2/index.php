<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">


  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Top Asmen <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Top Asmen <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row mt-3">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weekending</label>
                </div>
                <select class="form-control" id="weekending" onchange="getData(this.value)">
                    <option>Pilih tanggal</option>
                    <option value="up">Weekending Up</option>
                    <?php foreach($tgl as $weekending): ?>
                    <option value="<?= $weekending['tgl']; ?>"><?= $weekending['tgl']; ?></option>
                    <?php endforeach; ?>    
                </select>
            </div>
        </form>
    </div>
    <div class="col-lg-6">
    
    </div>
</div>
<button class="btn btn-info mb-2" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
<a href="<?= base_url('top_asmen/excell');?>" class="btn btn-success mb-2">Export Excell</a>

<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Nama</th>
                <th>Manager</th>
                <th>Poin sendiri</th>
                <th>Poin team</th>
                <th>Peringkat Langsung</th>
                <th>Peringkat Tidak Langsung</th>
                <th>Jumlah Leader</th>
                <th>Jumlah Distributor</th>
                <th>Jumlah Retrain</th>
                <th>Jumlah Observasi</th>
                <th>Jumlah Team</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="show_data">
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
      <form action="<?= base_url('top_asmen2/tambah'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Gudang">Gudang</label>
              <input type="text" class="form-control" id="gudang" name="gudang" value="<?= $this->session->userdata('gudang'); ?>" readonly />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Manager">Manager</label>
              <input type="text" class="form-control" id="manager" name="manager" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Poin">Poin Sendiri</label>
              <input type="text" class="form-control" id="poin_sendiri" name="poin_sendiri" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Team">Poin Team</label>
              <input type="text" class="form-control" id="poin_tim" name="poin_tim" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Peringkat">Peringkat Langsung</label>
              <input type="text" class="form-control" id="peringkat_langsung" name="peringkat_langsung" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Peringkat2">Peringkat Tidak Langsung</label>
              <input type="text" class="form-control" id="peringkat_tidaklangsung" name="peringkat_tidaklangsung" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Leader">Jumlah Leader</label>
              <input type="text" class="form-control" id="jumlah_leader" name="jumlah_leader" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Distri">Jumlah Distributor</label>
              <input type="text" class="form-control" id="jumlah_distributor" name="jumlah_distributor" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Retrain">Jumlah Retrain</label>
              <input type="text" class="form-control" id="jumlah_retrain" name="jumlah_retrain" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Observasi">Jumlah Observasi</label>
              <input type="text" class="form-control" id="jumlah_observasi" name="jumlah_observasi" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Team">Jumlah Team</label>
              <input type="text" id="jumlah_team" name="jumlah_team" class="form-control">
              <small><span class="text-danger"><?=form_error('jumlah_team');?></span></small>
            </div>
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
      <form action="<?= base_url('top_asmen2/edit'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Nama">Nama</label>
              <input type="text" class="form-control" id="nama2" name="nama2" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Gudang">Gudang</label>
              <input type="text" class="form-control" id="gudang2" name="gudang2" readonly />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Manager">Manager</label>
              <input type="text" class="form-control" id="manager2" name="manager2" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Poin">Poin Sendiri</label>
              <input type="text" class="form-control" id="poin_sendiri2" name="poin_sendiri2" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Team">Poin Team</label>
              <input type="text" class="form-control" id="poin_tim2" name="poin_tim2" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Peringkat">Peringkat Langsung</label>
              <input type="text" class="form-control" id="peringkat_langsung2" name="peringkat_langsung2" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Peringkat2">Peringkat Tidak Langsung</label>
              <input type="text" class="form-control" id="peringkat_tidaklangsung2" name="peringkat_tidaklangsung2" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Leader">Jumlah Leader</label>
              <input type="text" class="form-control" id="jumlah_leader2" name="jumlah_leader2" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Distri">Jumlah Distributor</label>
              <input type="text" class="form-control" id="jumlah_distributor2" name="jumlah_distributor2" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Retrain">Jumlah Retrain</label>
              <input type="text" class="form-control" id="jumlah_retrain2" name="jumlah_retrain2" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="Observasi">Jumlah Observasi</label>
              <input type="text" class="form-control" id="jumlah_observasi2" name="jumlah_observasi2" required>
            </div>
            <div class="form-group col-md-6">
              <label for="Team">Jumlah Team</label>
              <input type="text" id="jumlah_team2" name="jumlah_team2" class="form-control">
              <small><span class="text-danger"><?=form_error('jumlah_team');?></span></small>
            </div>
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
  
  $('#mytable').DataTable({ bInfo: false });
  getData('');

  function getData(weekending) {

    $.ajax({
      url: "<?= base_url(); ?>top_asmen2/getData/" + weekending,
      success: function(result) {
        let results = JSON.parse(result);
        let data = "";

        if (!results[0]) {
          data += `<tr><td colspan="13" class="text-center">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending untuk menampilkan data.</td></tr>`;
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
            ${results[i].poin_sendiri}
            </td>
            <td>
            ${results[i].poin_tim}
            </td>
            <td>
            ${results[i].peringkat_langsung}
            </td>
            <td class="">
            ${results[i].peringkat_tidaklangsung}                    
            </td>
            <td class="">
            ${results[i].jumlah_leader}                    
            </td>
            <td class="">
            ${results[i].jumlah_distributor}                    
            </td>
            <td class="">
            ${results[i].jumlah_retrain}                    
            </td>
            <td class="">
            ${results[i].jumlah_observasi}                    
            </td>
            <td class="">
            ${results[i].jumlah_team}                    
            </td>
            <td>

            <div class="btn-group" >
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
            </button>
            <div class="dropdown-menu">
            <a onclick="getDataById(${results[i].id})" class="btn btn-success text-white" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
            <a href="<?= base_url(); ?>top_asmen2/hapus/${results[i].id}" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
            </div>
            </div>
            </td>
            </tr>
            `;
          }
        }

        $('#show_data').html(data);
      }
    });
  }

  function getDataById(id) {
    $.ajax({
      url: "<?= base_url('top_asmen2/getDataById/'); ?>" + id,
      success: function(result) {
        let results = JSON.parse(result);

        $('#id').val(results.id);
        $('#nama2').val(results.nama);
        $('#gudang2').val(results.gudang);
        $('#manager2').val(results.manager);
        $('#poin_sendiri2').val(results.poin_sendiri);
        $('#poin_tim2').val(results.poin_tim);
        $('#peringkat_langsung2').val(results.peringkat_langsung);
        $('#peringkat_tidaklangsung2').val(results.peringkat_tidaklangsung);
        $('#jumlah_leader2').val(results.jumlah_leader);
        $('#jumlah_distributor2').val(results.jumlah_distributor);
        $('#jumlah_retrain2').val(results.jumlah_retrain);
        $('#jumlah_observasi2').val(results.jumlah_observasi);
        $('#jumlah_team2').val(results.jumlah_team);

        $('#modalEdit').modal('show');
      }
    });
  }

</script>