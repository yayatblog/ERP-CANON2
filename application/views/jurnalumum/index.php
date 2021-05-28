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
                    <?php foreach ($weekending as $week): ?>
                    <option value="<?= $week['tgl']; ?>"><?= $week['tgl']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </form>
    </div>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="s-transaksi">Transaksi</label>
                </div>
                <input type="search" class="form-control" id="s-transaksi" placeholder="Cari nama transaksi.." oninput="getDataByWord(this.value)" onclick="getDataByWord(this.value)" />
            </div>
        </form>
    </div>
</div>

<button type="button" class="btn btn-info mb-2" onclick="tambahData('JR')"><i class="fa fa-plus"></i> Jurnal</button>
<button type="button" class="btn btn-info mb-2" onclick="tambahData('JP')"><i class="fa fa-plus"></i> Jurnal Penyesuaian</button>
<a href="" class="btn btn-success mb-2">Export Excel</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Transaksi</th>
                <th class="text-center">No. Bukti</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Kode Akun Debit</th>
                <th class="text-center">Kode Akun Kredit</th>
                <th class="text-center">Nama Akun Debit</th>
                <th class="text-center">Didebit</th>
                <th class="text-center">Nama Akun Kredit</th>
                <th class="text-center">Dikredit</th>
                <th class="text-center">Aksi</th>
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
      <form action="<?= base_url('jurnalumum/tambah'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="tanggal">Tanggal</label>
              <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" id="tanggal" name="tgl" value="<?= date('d-m-Y'); ?>" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputTf">Nama Transaksi</label>
              <input type="text" class="form-control" id="transaksi" name="transaksi" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputBukti">No. Bukti</label>
              <input type="text" class="form-control" id="no_bukti" name="no_bukti" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputJumlah">Jumlah</label>
              <input type="text" class="form-control" id="inputJumlah" name="jumlah" required oninput="$('#debit').val(this.value); $('#kredit').val(this.value)">
              <small class="form-text text-muted">*Masukkan angka saja tanpa awalan Rupiah (Rp) maupun tanda baca (.,)</small>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputDebit">Kode Akun Debit</label>
              <select name="kode_debit" id="kodeDebit" class="form-control" onchange="getAccountName('Debit', this.value)">
                <option value="">Pilih kode akun</option>
                <?php foreach ($account as $acc) : ?>
                <option value="<?= $acc['kode']; ?>"><?= "K-".$acc['kode']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputKredit">Kode Akun Kredit</label>
              <select name="kode_kredit" id="kodeKredit" class="form-control" onchange="getAccountName('Kredit', this.value)">
                <option value="">Pilih kode akun</option>
                <?php foreach ($account as $acc) : ?>
                <option value="<?= $acc['kode']; ?>"><?= "K-".$acc['kode']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAdebit">Nama Akun Didebit</label>
              <input type="text" class="form-control" id="akunDebit" name="nama_akundebit" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAkredit">Nama Akun Dikredit</label>
              <input type="text" class="form-control" id="akunKredit" name="nama_akunkredit" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputdebit">Didebit</label>
              <input type="text" class="form-control" id="debit" name="didebit" required readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputkredit">Dikredit</label>
              <input type="text" class="form-control" id="kredit" name="dikredit" required readonly>
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
      <form action="<?= base_url('jurnalumum/edit'); ?>" method="POST">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="tanggal2">Tanggal</label>
              <input type="text" class="form-control datepicker" data-date-format="dd-mm-yyyy" id="tanggal2" name="tgl2" value="" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputTf">Nama Transaksi</label>
              <input type="text" class="form-control" id="transaksi2" name="transaksi2" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputBukti">No. Bukti</label>
              <input type="text" class="form-control" id="no_bukti2" name="no_bukti2" required readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputJumlah">Jumlah</label>
              <input type="text" class="form-control" id="jumlah2" name="jumlah2" required oninput="$('#debit2').val(this.value); $('#kredit2').val(this.value)">
              <small class="form-text text-muted">*Masukkan angka saja tanpa awalan Rupiah (Rp) maupun tanda baca (.,)</small>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputDebit">Kode Akun Debit</label>
              <select name="kode_debit2" id="kodeDebit2" class="form-control" onchange="getAccountName2('Debit', this.value)">
                <option value="">Pilih kode akun</option>
                <?php foreach ($account as $acc) : ?>
                <option value="<?= $acc['kode']; ?>"><?= "K-".$acc['kode']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputKredit">Kode Akun Kredit</label>
              <select name="kode_kredit2" id="kodeKredit2" class="form-control" onchange="getAccountName2('Kredit', this.value)">
                <option value="">Pilih kode akun</option>
                <?php foreach ($account as $acc) : ?>
                <option value="<?= $acc['kode']; ?>"><?= "K-".$acc['kode']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAdebit">Nama Akun Didebit</label>
              <input type="text" class="form-control" id="akunDebit2" name="nama_akundebit2" required>
            </div>
            <div class="form-group col-md-6">
              <label for="inputAkredit">Nama Akun Dikredit</label>
              <input type="text" class="form-control" id="akunKredit2" name="nama_akunkredit2" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputdebit">Didebit</label>
              <input type="text" class="form-control" id="debit2" name="didebit2" required readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="inputkredit">Dikredit</label>
              <input type="text" class="form-control" id="kredit2" name="dikredit2" required readonly>
            </div>
            <input type="hidden" name="id" id="id" value="" />
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

    getData($('#weekending').val());

    function getData(weekending) {
        $.ajax({
            url: "<?= base_url('jurnalumum/getData/'); ?>" + weekending,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                for (let i = 0; i < results.length; i++) {
                    data += `
                    <tr>
                    <td class="text-center" rowspan="2">
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
                    ${results[i].kode_debit}
                    </td>
                    <td class="">
                    -
                    </td>
                    <td class="">
                    ${results[i].nama_akundebit ? results[i].nama_akundebit : "-"}                   
                    </td>
                    <td class="">
                    ${results[i].didebit ? numberFormatter.format(results[i].didebit) : "-"}
                    </td>
                    <td class="">
                    -                  
                    </td>
                    <td class="">
                    -
                    </td>
                    <td rowspan="2">

                    <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                    </button>
                    <div class="dropdown-menu">
                    <button onclick="getDataById(${results[i].id})" class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></button>
                    <a href="<?= base_url('jurnalumum/hapus/'); ?>${results[i].id}" onclick="return confirm('Yakin ingin dihapus?');" class="btn btn-danger mt-2" style="margin-left:35px"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                    </div>
                    </td>
                    </tr>

                    <tr>
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
                    -
                    </td>
                    <td class="">
                    ${results[i].kode_kredit ? "K-" + results[i].kode_kredit : "-"}
                    </td>
                    <td class="">
                    -                  
                    </td>
                    <td class="">
                    -
                    </td>
                    <td class="">
                    ${results[i].nama_akunkredit ? results[i].nama_akunkredit : "-"}                  
                    </td>
                    <td class="">
                    ${results[i].dikredit ? numberFormatter.format(results[i].dikredit) : "-"}
                    </td>
                    </tr>
                    `;
                }

                $('#show_data').html(data);
            }
        });
    }

    function getAccountName(debkre, kode) {
      $.ajax({
        url: '<?= base_url('jurnalumum/getAccountName/'); ?>' + kode,
        success: function(result) {
          if (debkre == "Debit") {
            $('#akunDebit').val(JSON.parse(result).nama);
          } else {
            $('#akunKredit').val(JSON.parse(result).nama);
          }
        }
      });
    }

    function getAccountName2(debkre, kode) {
      $.ajax({
        url: '<?= base_url('jurnalumum/getAccountName/'); ?>' + kode,
        success: function(result) {
          if (debkre == "Debit") {
            $('#akunDebit2').val(JSON.parse(result).nama);
          } else {
            $('#akunKredit2').val(JSON.parse(result).nama);
          }
        }
      });
    }

    // document.getElementById("s-transaksi").addEventListener("search", function(e) {
    //   getDataByWord("");
    // });

    function getDataByWord(word) {
      let url = word ? '<?= base_url('jurnalumum/getDataByWord/'); ?>' + word : '<?= base_url('jurnalumum/getDataByWord/-'); ?>';
      $.ajax({
        url: url,
        success: function(result) {
          let results = JSON.parse(result);
          let data = "";

          for (let i = 0; i < results.length; i++) {
                    data += `
                    <tr>
                    <td class="text-center" rowspan="2">
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
                    ${results[i].kode_debit}
                    </td>
                    <td class="">
                    -
                    </td>
                    <td class="">
                    ${results[i].nama_akundebit ? results[i].nama_akundebit : "-"}                   
                    </td>
                    <td class="">
                    ${results[i].didebit ? numberFormatter.format(results[i].didebit) : "-"}
                    </td>
                    <td class="">
                    -                  
                    </td>
                    <td class="">
                    -
                    </td>
                    <td rowspan="2">

                    <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                    </button>
                    <div class="dropdown-menu">
                    <button onclick="getDataById(${results[i].id})" class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></button>
                    <a href="<?= base_url('jurnalumum/hapus/'); ?>${results[i].id}" onclick="return confirm('Yakin ingin dihapus?');" class="btn btn-danger mt-2" style="margin-left:35px"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                    </div>
                    </td>
                    </tr>

                    <tr>
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
                    -
                    </td>
                    <td class="">
                    ${results[i].kode_kredit ? "K-" + results[i].kode_kredit : "-"}
                    </td>
                    <td class="">
                    -                  
                    </td>
                    <td class="">
                    -
                    </td>
                    <td class="">
                    ${results[i].nama_akunkredit ? results[i].nama_akunkredit : "-"}                  
                    </td>
                    <td class="">
                    ${results[i].dikredit ? numberFormatter.format(results[i].dikredit) : "-"}
                    </td>
                    </tr>
                    `;
                }

          $('#show_data').html(data);
        }
      });
    }

    function getDataById(id) {
      $.ajax({
        url: '<?= base_url('jurnalumum/getDataById/'); ?>' + id,
        success: function(result) {
          let results = JSON.parse(result);


          $('#tanggal2').val(results.tgl);
          $('#transaksi2').val(results.transaksi);
          $('#no_bukti2').val(results.no_bukti);
          $('#jumlah2').val(results.jumlah);
          $('#kodeDebit2').val(results.kode_debit);
          $('#kodeKredit2').val(results.kode_kredit);
          $('#akunDebit2').val(results.nama_akundebit);
          $('#akunKredit2').val(results.nama_akunkredit);
          $('#debit2').val(results.didebit);
          $('#kredit2').val(results.dikredit);
          $('#id').val(results.id);
          $('#modalEdit').modal('show');
        }
      });
    }

    function tambahData(jenis) {
      let url = "";
      if (jenis == "JR") {
        url = "getLatestJRId";
      } else {
        url = "getLatestJPId";
      }

      // alert(jenis);

      $.ajax({
        url: '<?= base_url('jurnalumum/'); ?>' + url,
        success: function(result) {
          let response = JSON.parse(result);
          let no_bukti = response ? response.no_bukti : null;
          let zerofill = "";
          let curDate = new Date();
          let curYear = curDate.getFullYear().toString();
          let curMonth = (curDate.getMonth() + 1) < 10 ? "0" + (curDate.getMonth() + 1) : (curDate.getMonth() + 1);

          if (!response) {
            if (jenis == "JR") {
              $('#no_bukti').val("JR/" + curDate.getDate() + curMonth + curYear.substr(2, 4) + "/" + "00001");
            } else {
              $('#no_bukti').val("JP-00001");
            }
          } else {
            if (jenis == "JR") {
              no_bukti = Number(no_bukti.substr(10, no_bukti.length)) + 1;
              if (no_bukti.toString().length < 5) {
                zerofill = "0".repeat(5 - no_bukti.toString().length);
              }
              $('#no_bukti').val("JR/" + curDate.getDate() + curMonth + curYear.substr(2, 4) + "/" + zerofill + Number(no_bukti));
            } else {
              no_bukti = Number(no_bukti.substr(3, no_bukti.length)) + 1;
              if (no_bukti.toString().length < 5) {
                zerofill = "0".repeat(5 - no_bukti.toString().length);
              }
              $('#no_bukti').val("JP-" + zerofill + Number(no_bukti));
            }
          }

          $('#modalTambah').modal('show');
        }
      });
    }
</script>