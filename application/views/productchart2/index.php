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
        <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weekending</label>
                </div>
                <select class="form-control" id="weekending" onchange="getData(this.value, $('#jabatan').val(), '<?= $this->session->userdata('gudang'); ?>')">
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
                <select class="form-control" id="jabatan" onchange="getData($('#weekending').val(), this.value, '<?= $this->session->userdata('gudang'); ?>')">
                    <option>Pilih jabatan</option>
                    <?php foreach ($jbtn as $jabatan): ?>
                    <option value="<?= $jabatan['nama_jabatan']; ?>"><?= $jabatan['nama_jabatan']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
    </div>
</div>
<button class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
<a href="<?= base_url('product_chart2/export');?>" class="btn btn-danger mb-2">Export PDF</a>


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
      <form action="<?= base_url('product_chart2/tambah'); ?>" method="post" enctype="multipart/form-data" >
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
                    <label for="inputSabtu">Profit Sabtu</label>
                    <input type="text" class="form-control" id="inputSabtu" name="profit_sabtu" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputMinggu">Profit Minggu</label>
                    <input type="text" class="form-control" id="inputMinggu" name="profit_minggu" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputSenin">Profit Senin</label>
                    <input type="text" class="form-control" id="inputSenin" name="profit_senin" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputSelasa">Profit Selasa</label>
                    <input type="text" class="form-control" id="inputSelasa" name="profit_selasa" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputRabu">Profit Rabu</label>
                    <input type="text" class="form-control" id="inputRabu" name="profit_rabu" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputKamis">Profit Kamis</label>
                    <input type="text" class="form-control" id="inputKamis" name="profit_kamis" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputJumat">Profit Jum'at</label>
                    <input type="text" class="form-control" id="inputJumat" name="profit_jumat" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputTotal">Total Profit</label>
                    <input type="text" class="form-control" id="inputTotal" name="total_profit" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPoin">Total Poin</label>
                    <input type="text" class="form-control" id="inputPoin" name="total_poin" required>
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


<script>
    
    getData('-', '-', '<?= $this->session->userdata('gudang'); ?>');

    $('#jabatan').on('change', function() {
        // alert($('#weekending').val() + " " + '<?= $this->session->userdata('gudang'); ?>');
    });

    function getData(weekending, jabatan, gudang) {
        $.ajax({
            url: "<?= base_url('product_chart2/getData/'); ?>" + weekending + "/" + jabatan + "/" + gudang,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                // alert(result);

                if (!results[0]) {
                    data += `<tr><td colspan="13" class="text-center">Tidak ada data ditampilkan. Silahkan pilih tanggal weekending, jabatan dan gudang untuk menampilkan data.</td></tr>`;
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
                        <td>
                        <div class="btn-group" >
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        </button>
                        <div class="dropdown-menu">
                        <a href="getDataById(${results[i].id})" class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
                        <a href="<?= base_url();?>product_chart2/hapus/${results[i].id}" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
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
            url: "<?= base_url('product_chart2/getDataById/'); ?>" + id,
            success: function(result) {
                let results = JSON.parse(result);


            }
        });
    }

</script>