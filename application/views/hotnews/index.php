<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">
  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Hot News <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Hot News <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
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
                    <option value="">Pilih tanggal</option>
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
<a href="<?= base_url('hot_news/import');?>" class="btn btn-success mb-2">Import</a>

<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center;">
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Gudang</th>
                <th>Manager</th>
                <th>Subject</th>
                <th>Date</th>
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
      <form action="<?= base_url('hot_news/tambah'); ?>" method="post" enctype="multipart/form-data" >
        <div class="modal-body">
          <div class="form-group">
            <label for="name" class="d-block">Image</label>
            <img src="<?= base_url('upload/product/default.jpg'); ?>" width="90" style="border-radius:10px;" id="preview_img" class="mb-2" />
            <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
            type="file" id="img" name="image" />
            <div class="invalid-feedback">
              <?php echo form_error('image') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="nama">Nama</label>
            <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
            type="text" name="nama" placeholder="Masukkan nama" />
            <div class="invalid-feedback">
              <?php echo form_error('nama') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="gudang">Gudang</label>
            <input class="form-control <?php echo form_error('gudang') ? 'is-invalid':'' ?>"
            type="text" name="gudang" placeholder="Masukkan gudang" />
            <div class="invalid-feedback">
              <?php echo form_error('gudang') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="manager">Manager</label>
            <input class="form-control <?php echo form_error('manager') ? 'is-invalid':'' ?>"
            type="text" name="manager" min="0" placeholder="Masukkan Manager" />
            <div class="invalid-feedback">
              <?php echo form_error('manager') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="name">Subject</label>
            <input class="form-control <?php echo form_error('subject') ? 'is-invalid':'' ?>"
            type="text" name="subject" placeholder="Masukkan Subject" />
            <div class="invalid-feedback">
              <?php echo form_error('subject') ?>
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
      <form action="<?= base_url('hot_news/edit'); ?>" method="post" enctype="multipart/form-data" >
        <div class="modal-body">
          <input type="hidden" id="id" name="id" value="">
          <div class="form-group">
            <img src="" width="90" style="border-radius:10px;" id="preview_img2" />
            <input type="hidden" name="old_img" id="old_img" />
            <br>
            <br>
            <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
            type="file" name="image2" id="new_img" />
            <div class="invalid-feedback">
              <?php echo form_error('image2') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="nama2">Nama</label>
            <input class="form-control <?php echo form_error('nama2') ? 'is-invalid':'' ?>"
            type="text" id="nama2" name="nama2" placeholder="Masukkan nama" value=""/>
            <div class="invalid-feedback">
              <?php echo form_error('nama') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="gudang2">Gudang</label>
            <input class="form-control <?php echo form_error('gudang2') ? 'is-invalid':'' ?>"
            type="text" id="gudang2" name="gudang2" placeholder="Masukkan gudang" value=""/>
            <div class="invalid-feedback">
              <?php echo form_error('gudang2') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="manager2">Manager</label>
            <input class="form-control <?php echo form_error('manager2') ? 'is-invalid':'' ?>"
            type="text" id="manager2" name="manager2" min="0" placeholder="Masukkan Manager" value=""/>
            <div class="invalid-feedback">
              <?php echo form_error('manager2') ?>
            </div>
          </div>

          <div class="form-group">
            <label for="name">Subject</label>
            <input class="form-control <?php echo form_error('subject') ? 'is-invalid':'' ?>"
            type="text" id="subject2" name="subject2" placeholder="Masukkan Subject" value=""/>
            <div class="invalid-feedback">
              <?php echo form_error('subject') ?>
            </div>
          </div>

        </div>
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

  getData('');

  function getData(weekending) {
    $.ajax({
      url: "<?= base_url('hot_news/getData/'); ?>" + weekending,
      success: function(result) {
        let results = JSON.parse(result);
        let data = "";

        if (!results[0]) {
          data += `<tr><td class="text-center" colspan="8">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending untuk menampilkan data.</td></tr>`;
        } else {
          for (let i = 0; i < results.length; i++) {
            data += `
            <tr>
            <td style="text-align:center;">
            ${i+1}
            </td>
            <td style="text-align:center;">
            <img src="<?= base_url('upload/product/'); ?>${results[i].image}" width="60" heigth="60" style="border-radius:10px;"/>
            </td>
            <td width="">
            ${results[i].nama}
            </td>
            <td width="">
            ${results[i].gudang}
            </td>
            <td>
            ${results[i].manager}
            </td>
            <td>
            ${results[i].subject}
            </td>
            <td>
            ${results[i].tgl == "up" ? "<?= date('d-m-Y'); ?>" : results[i].tgl}
            </td>

            <td style="text-align:center;">
            <a onclick="getDataById(${results[i].id})" class="btn btn-success text-white"><i class="fa fa-edit"></i>Edit</i></a>
            <a href="<?= base_url(); ?>hot_news/hapus/${results[i].id}" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
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
      url: "<?= base_url('hot_news/getDataById/'); ?>" + id,
      success: function(result) {
        let results = JSON.parse(result);

        $('#id').val(results.id);
        $('#old_img').val(results.image);
        $('#preview_img2').attr('src', "<?php echo base_url('upload/product/'); ?>" + results.image);
        $('#nama2').val(results.nama);
        $('#gudang2').val(results.gudang);
        $('#manager2').val(results.manager);
        $('#subject2').val(results.subject);

        $('#modalEdit').modal('show');
      }
    });
  }

  $('#new_img').on('change', function() {
    $('#old_img').val("");
    const fr = new FileReader();
    fr.readAsDataURL(this.files[0]);

    fr.onload = function(e) {
      preview_img2.src = e.target.result;
    }
  });

  $('#img').on('change', function() {
    const fr = new FileReader();
    fr.readAsDataURL(this.files[0]);

    fr.onload = function(e) {
      preview_img.src = e.target.result;
    }
  });

</script>