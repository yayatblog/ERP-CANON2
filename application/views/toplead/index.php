<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Top Leader <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Top Leader <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
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
                <select class="form-control" id="weekending">
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
<button class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
<a href="<?= base_url('top_lead/export_excell');?>" class="btn btn-success mb-2">Export Excell</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Nama</th>
                <th>Gudang</th>
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
      <form action="<?= base_url('top_lead/tambah'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNama">Nama</label>
              <input type="text" class="form-control" id="inputNama" name="nama" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputGudang">Gudang</label>
              <input type="text" class="form-control" id="inputGudang" name="gudang" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputManager">Manager</label>
              <input type="text" class="form-control" id="inputManager" name="manager" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPoin">Poin Sendiri</label>
              <input type="text" class="form-control" id="inputPoin" name="poin_sendiri" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputTeam">Poin Team</label>
              <input type="text" class="form-control" id="inputTeam" name="poin_team" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPeringkat">Peringkat Langsung</label>
              <input type="text" class="form-control" id="inputPeringkat" name="peringkat_langsung" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPeringkat2">Peringkat Tidak Langsung</label>
              <input type="text" class="form-control" id="inputPeringkat" name="peringkat_tidaklangsung" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputLeader">Jumlah Leader</label>
              <input type="text" class="form-control" id="inputLeader" name="jumlah_leader" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputDistri">Jumlah Distributor</label>
              <input type="text" class="form-control" id="inputDistri" name="jumlah_distributor" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputRetrain">Jumlah Retrain</label>
              <input type="text" class="form-control" id="inputRetrain" name="jumlah_retrain" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputObservasi">Jumlah Observasi</label>
              <input type="text" class="form-control" id="inputObservasi" name="jumlah_observasi" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputTeam">Jumlah Team</label>
              <input type="text" name="jumlah_team" class="form-control" id="inputTeam">
              <small><span class="text-danger"><?=form_error('jumlah_team');?></span></small>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
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
      <form action="<?= base_url('top_lead/edit'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputNama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputGudang">Gudang</label>
              <input type="text" class="form-control" id="gudang" name="gudang" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputManager">Manager</label>
              <input type="text" class="form-control" id="manager" name="manager" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPoin">Poin Sendiri</label>
              <input type="text" class="form-control" id="poin_sendiri" name="poin_sendiri" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputTeam">Poin Team</label>
              <input type="text" class="form-control" id="poin_team" name="poin_team" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputPeringkat">Peringkat Langsung</label>
              <input type="text" class="form-control" id="peringkat_langsung" name="peringkat_langsung" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPeringkat2">Peringkat Tidak Langsung</label>
              <input type="text" class="form-control" id="peringkat_tidaklangsung" name="peringkat_tidaklangsung" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputLeader">Jumlah Leader</label>
              <input type="text" class="form-control" id="jumlah_leader" name="jumlah_leader" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputDistri">Jumlah Distributor</label>
              <input type="text" class="form-control" id="jumlah_distributor" name="jumlah_distributor" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputRetrain">Jumlah Retrain</label>
              <input type="text" class="form-control" id="jumlah_retrain" name="jumlah_retrain" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputObservasi">Jumlah Observasi</label>
              <input type="text" class="form-control" id="jumlah_observasi" name="jumlah_observasi" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputTeam2E">Jumlah Team</label>
              <input type="text" name="jumlah_team" class="form-control" id="jumlah_team" value="">
              <small><span class="text-danger"><?=form_error('jumlah_team');?></span></small>
            </div>
          </div>
        </div>
        <input type="hidden" name="id" id="id" value="" />
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

    $('#mytable').DataTable({
      "bInfo": false
    });

    $('#weekending').on('change', function() {
        let weekending = $(this).val();

        $.ajax({
            url: "<?= base_url(); ?>top_lead/tampil_data2/" + weekending,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                if (results[0] == "") {
                    data = `<tr><td class="text-center" colspan="14">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending untuk menampilkan data.</td></tr>`;
                } else {
                    for(let i = 0; i < results.length; i++) {
                        data += `
                        <tr>
                        <td style="text-align:center">
                        ${i+1}
                        </td>
                        <td width="">
                        ${results[i].nama}
                        </td>
                        <td width="">
                        ${results[i].gudang}
                        </td>
                        <td width="">
                        ${results[i].manager}
                        </td>
                        <td>
                        ${results[i].poin_sendiri}
                        </td>
                        <td>
                        ${results[i].poin_team}
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
                        <a href="<?= base_url();?>top_lead/hapus/${results[i].id}" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                        </div>
                        </div>
                        </td>
                        </tr>
                        `;
                    }
                }

                $('#show_data').html(data);
                $('#mytable').DataTable();
            }
        });
    });

  function getDataById(id) {
    let url = "<?= base_url(); ?>top_lead/getDataById/" + id;

    $.ajax({
      url: url,
      success: function(result) {
        let results = JSON.parse(result);

        $('#id').val(results.id);
        $('#nama').val(results.nama);
        $('#gudang').val(results.gudang);
        $('#manager').val(results.manager);
        $('#poin_sendiri').val(results.poin_sendiri);
        $('#poin_team').val(results.poin_team);
        $('#peringkat_langsung').val(results.peringkat_langsung);
        $('#peringkat_tidaklangsung').val(results.peringkat_tidaklangsung);
        $('#jumlah_leader').val(results.jumlah_leader);
        $('#jumlah_distributor').val(results.jumlah_distributor);
        $('#jumlah_retrain').val(results.jumlah_retrain);
        $('#jumlah_observasi').val(results.jumlah_observasi);
        $('#jumlah_team').val(results.jumlah_team);

        $('#modalEdit').modal('show');
      }
    });
  }

</script>