

<style>
    .container-bottom {
        padding-top: 2px;
        transform: translateY(585px);
        transition: 0.3s ease;
    }

    .expand {
        transform: translateY(0px);
    }
</style>

<div class="container-fluid">
    <?php if($this->session->flashdata('flash2')) :?>
        <div class="row mt-3">
            <div class="col md-6">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Karyawan <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
                <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>    
    </div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
    <div class="row mt-3">
        <div class="col md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
            <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<h5 class="text-bold">Manager P & L</h5>

<div class="row mt-3 mb-2">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="weekending" class="input-group-text">Weekending :</label>
                </div>
                <input type="text" name="weekending" id="weekending" class="form-control form-control-sm datepicker" data-date-format="dd-mm-yyyy" value="<?= date('d-m-Y'); ?>" style="cursor: default">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="noinv" class="input-group-text">No. Inv :</label>
                </div>
                <input type="text" name="noinv" id="noinv" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="pilmanager" class="input-group-text">Nama Manager :</label>
                </div>
                <input type="text" name="nm_manager" id="nm_manager" class="form-control form-control-sm">
                <input type="text" name="id_manager" id="id_manager" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="security" class="input-group-text">Akun Security :</label>
                </div>
                <input type="text" name="akun_security" id="akun_security" class="form-control form-control-sm">
                <input type="text" name="id_security" id="id_security" class="form-control form-control-sm">
            </div>
        </form>
    </div>
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="jabatan" class="input-group-text">Jabatan :</label>
                </div>
                <select name="jabatan" id="jabatan" class="form-control form-control-sm">
                    <option value="">Pilih jabatan</option>
                    <option value="Divisional Manager">Divisional Manager</option>
                    <option value="Branch Manager">Branch Manager</option>
                    <option value="Tenant Manager">Tenant Manager</option>
                    <!-- <option value=""></option> -->
                </select>
            </div>
            <!-- <div class="d-flex mt-1"> -->
                <div class="input-group input-group-sm mt-1">
                  <div class="input-group-prepend">
                    <label for="manager" class="input-group-text">Manager :</label>
                  </div>
                  <select name="manager" id="manager" class="form-control form-control-sm">
                    <option value="">Pilih manager</option>
                    <!-- <option value=""></option> -->
                  </select>
                    <div class="form-check ml-2 mt-1">
                      <input class="form-check-input" type="checkbox" value="koreksi" id="koreksi" name="koreksi">
                      <label class="form-check-label" for="koreksi">
                        Koreksi
                      </label>
                    </div>
                </div>

                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="gudang" class="input-group-text">Gudang :</label>
                    </div>
                    <input type="text" name="gudang" id="gudang" class="form-control" readonly>
                </div>
            
                <!-- <div class="form-check form-check-inline">
                    <input type="checkbox" name="koreksi" id="koreksi" class="form-check-input">
                    <label class="form-check-label" for="koreksi">Koreksi</label>
                </div> -->
            <!-- </div> -->
        </form>
    </div>
</div>

<h5 class="text-bold mt-4">Penjualan</h5>
<button class="btn btn-primary mb-2">Print</button>
<a href="#" class="btn btn-success mb-2">Export</a>

<div class="table-responsive">
    <!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
        <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Kode Barang</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">QTY</th>
                    <th class="text-center">O/C</th>
                    <th class="text-center">Total O/C</th>
                    <th class="text-center">F/C</th>
                    <th class="text-center">Total F/C</th>
                </tr>
            </thead>
            <tbody id="show_data">
              <tr>
                <td class="text-center" colspan="9">Tidak ada data ditampilkan.</td>
              </tr>
            </tbody>
        </table>
    </div>
    <!-- ./table-responsive -->

</div>

<!-- ./container-fluid -->
<div class="container  ml-2 mr-2">
<div class="row">
            <div class="col-lg-4">
                <h5 class="text-dark text-bold">Pengeluaran / Pemasukan</h5>
                <!-- <a href="" class="btn btn-primary btn-sm">Tambah</a> -->
                <table class="table table-responsive text-center table-sm text-dark mt-2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Debit</th>
                            <th>Kredit</th>
                        </tr>
                    </thead>
                    <tbody id="show_data_inout">
                        <tr>
                            <td colspan="3">Tidak ada data.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <table class="table table-responsive text-center table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Total Qty</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Total O/C</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>PPN</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Penjualan Kotor</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Hutang Dagang</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Laba Kotor Penjualan</th>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Biaya ADM</th>
                            <td><input type="text" value="0" class="text-right form-control form-control-sm" style="height: 25px"></td>
                        </tr>
                        <tr>
                            <th>Biaya Konsultan</th>
                            <td><input type="text" value="0" class="text-right form-control form-control-sm" style="height: 25px"></td>
                        </tr>
                        <tr>
                            <th>Total Pengeluaran</th>
                            <td class="text-right">0</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Point Unit</th>
                            <td class="text-right">0,00</td>
                        </tr>
                        <tr>
                            <th>Override Pribadi</th>
                            <td class="text-right">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <h6 class="text-dark text-bold">Piutang / (Hutang)</h6>
                <table class="table table-responsive text-center table-sm text-dark" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Saldo Awal</th>
                            <th>Masuk / (Keluar)</th>
                            <th>Saldo Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Simpanan di HO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Override</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 d-flex">
                <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Laba Kotor Diterima</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Total Pembayaran Tagihan</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Jumlah Bersih Diterima</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Saldo Awal</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Saldo Akhir</th>
                            <td class="text-right">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-lg-4 text-dark">
                <label for="akunsetoran">Akun Setoran :</label>
                <div class="form-inline mb-1">
                    <select name="akunsetoran" id="akunsetoran" class="form-control form-control-sm" style="height: 25px; width: 200px;">
                        <option value=""></option>
                        <option value="">Pilihan #1</option>
                        <option value="">Pilihan #2</option>
                    </select>&nbsp;
                    <button class="btn btn-warning btn-sm text-dark" style="height: 25px; line-height: 12.5px">Tambah Akun</button>
                </div>
                <label for="akunadm">Akun ADM :</label>
                <div class="form-inline">
                    <select name="akunadm" id="akunadm" class="form-control form-control-sm" style="height: 25px; width: 200px;">
                        <option value=""></option>
                        <option value="">Pilihan #1</option>
                        <option value="">Pilihan #2</option>
                    </select>&nbsp;
                    <button class="btn btn-warning btn-sm text-dark" style="height: 25px; line-height: 12.5px">Tambah Akun</button>
                </div>
            </div>
            <div class="col-lg-4 text-dark">
                <label for="akunkonsultan">Akun Konsultan :</label>
                <div class="form-inline">
                    <select name="akunkonsultan" id="akunkonsultan" class="form-control form-control-sm" style="height: 25px; width: 200px;">
                        <option value=""></option>
                        <option value="">Pilihan #1</option>
                        <option value="">Pilihan #2</option>
                    </select>&nbsp;
                    <button class="btn btn-warning btn-sm text-dark" style="height: 25px; line-height: 12.5px">Tambah Akun</button>
                </div>
            </div>
        </div>
    </div>

<!-- <div class="container-fluid container-bottom" style="display: flex; flex-direction: column; width: 100%; position: absolute; bottom: 0; box-sizing: border-box; align-self: center">
    <div class="text-center">
        <i class="fa fa-arrow-up text-primary expander animate" style="cursor: pointer;"></i>
    </div>
    <footer class="bg-primary" id="expandElement" style="padding-top: 30px; padding-bottom: 35px; flex: 1;">
        <div class="row">
            <div class="col-lg-4">
                <h5 class="text-dark text-bold">Pengeluaran / Pemasukan</h5>
                <a href="" class="btn btn-primary btn-sm">Tambah</a>
                <table class="table table-responsive text-center table-sm text-dark mt-2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Keterangan</th>
                            <th>Debit</th>
                            <th>Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dummy data</td>
                            <td>Dummy data</td>
                            <td>Dummy data</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <table class="table table-responsive text-center table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Total Qty</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Total O/C</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>PPN</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Penjualan Kotor</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Hutang Dagang</th>
                            <td>0</td>
                        </tr>
                        <tr>
                            <th>Laba Kotor Penjualan</th>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Biaya ADM</th>
                            <td><input type="text" value="0" class="text-right form-control form-control-sm" style="height: 25px"></td>
                        </tr>
                        <tr>
                            <th>Biaya Konsultan</th>
                            <td><input type="text" value="0" class="text-right form-control form-control-sm" style="height: 25px"></td>
                        </tr>
                        <tr>
                            <th>Total Pengeluaran</th>
                            <td class="text-right">0</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Point Unit</th>
                            <td class="text-right">0,00</td>
                        </tr>
                        <tr>
                            <th>Override Pribadi</th>
                            <td class="text-right">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <h6 class="text-dark text-bold">Piutang / (Hutang)</h6>
                <table class="table table-responsive text-center table-sm text-dark" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Saldo Awal</th>
                            <th>Masuk / (Keluar)</th>
                            <th>Saldo Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Simpanan di HO</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Override</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 d-flex">
                <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <th>Laba Kotor Diterima</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Total Pembayaran Tagihan</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Jumlah Bersih Diterima</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Saldo Awal</th>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <th>Saldo Akhir</th>
                            <td class="text-right">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-dark">
                <label for="akunsetoran">Akun Setoran :</label>
                <div class="form-inline mb-1">
                    <select name="akunsetoran" id="akunsetoran" class="form-control form-control-sm" style="height: 25px; width: 200px;">
                        <option value=""></option>
                        <option value="">Pilihan #1</option>
                        <option value="">Pilihan #2</option>
                    </select>&nbsp;
                    <button class="btn btn-warning btn-sm text-dark" style="height: 25px; line-height: 12.5px">Tambah Akun</button>
                </div>
                <label for="akunadm">Akun ADM :</label>
                <div class="form-inline">
                    <select name="akunadm" id="akunadm" class="form-control form-control-sm" style="height: 25px; width: 200px;">
                        <option value=""></option>
                        <option value="">Pilihan #1</option>
                        <option value="">Pilihan #2</option>
                    </select>&nbsp;
                    <button class="btn btn-warning btn-sm text-dark" style="height: 25px; line-height: 12.5px">Tambah Akun</button>
                </div>
            </div>
            <div class="col-lg-4 text-dark">
                <label for="akunkonsultan">Akun Konsultan :</label>
                <div class="form-inline">
                    <select name="akunkonsultan" id="akunkonsultan" class="form-control form-control-sm" style="height: 25px; width: 200px;">
                        <option value=""></option>
                        <option value="">Pilihan #1</option>
                        <option value="">Pilihan #2</option>
                    </select>&nbsp;
                    <button class="btn btn-warning btn-sm text-dark" style="height: 25px; line-height: 12.5px">Tambah Akun</button>
                </div>
            </div>
            <div class="col-lg-4 text-dark text-right">
                <button class="btn btn-sm btn-success">Proses</button>
            </div>
        </div>
    </footer>
</div>

</div> -->
<!-- ./content -->

<!-- </div> -->
<!-- ./content-wrapper -->

<script>

$('.datepicker').datepicker();

$('#jabatan').on('change', function() {
  let weekending = $('#weekending').val();
  let manager = $('#manager').val();
  fetchData(this.value);
  // alert(this.value);
});

$('#weekending').on('change', function() {
  let manager = $('#manager').val();
  invoiceMgr(this.value, manager);
});

$('#manager').on('change', function() {
  let weekending = $('#weekending').val();
  invoiceMgr(weekending, this.value);
});

$('#koreksi').on('change', function() {
  fetchData($('#jabatan').val());
});

function invoiceMgr(weekending, nama) {
  // let fetchUrl = "manager/fetchData/" + weekending + "/" + jabatan + "/" + manager;

  let urlInvoiceMgr = "manager/invoiceMgr/" + weekending + "/" + nama;

  $.ajax({
    url: "<?= base_url(); ?>" + urlInvoiceMgr,
    success: function(result) {
      let results = JSON.parse(result);
      let data = "";

      if (!results[0]) {
      //   data = `<option value="">Pilih manager</option>`;
        $('#noinv').val("");
        $('#nm_manager').val("");
        $('#id_manager').val("");
        $('#akun_security').val("");
        $('#id_security').val("");
        $('#gudang').val("");

        data = `<tr><td class="text-center" colspan="9">Tidak ada data ditampilkan.</td></tr>`;
      } else {
        // data = `<option value="">Pilih manager</option>`;
        // for (let i = 0; i < results.length; i++) {
          // data += `
          // <option value="${results[i].nama}">${results[i].nama}</option>
          // `;
        // }
      // }

      $('#noinv').val(results[0].no_invoice);
      $('#nm_manager').val(results[0].nama);
      $('#id_manager').val(results[0].kode_id);
      $('#gudang').val(results[0].gudang);
      $('#id_security').val(results[0].security_id);
      $('#akun_security').val(results[0].username);

      for (let i = 0; i < results.length; i++) {
        data += `<tr>
        <td class="text-center">
        ${i+1}
        </td>
        <td class="text-center">
        ${results[i].kode}
        </td>
        <td class="text-center">
        ${results[i].nama}
        </td>
        <td class="text-center">
        ${results[i].qty}
        </td>
        <td class="text-center">
        ${results[i].otc}
        </td>
        <td class="text-center">
        ${results[i].totalotc}
        </td>
        <td class="text-center">
        ${results[i].ftc}          
        </td>
        <td class="text-center">
        ${results[i].totalftc}          
        </td>
        </tr>`;
      }

      fetchInOut(results[0].no_invoice);

      let pilihanAkun = `<option value="K-200">K-200 Bank BCA</option>`;
      $('#akunsetoran').html(pilihanAkun);
      $('#akunadm').html(pilihanAkun);
      $('#akunkonsultan').html(pilihanAkun);

      let inOutData = "";
      let nomor_invoice = results[0].no_invoice;

      $('#tambahInOut').on('click', function() {
        tambahInOut(nomor_invoice);
      });

                // $('#grand_total').val(results);
              }
      $('#show_data').html(data);
            }
            });
}

function fetchInOut(no_invoice) {
  let urlFetchInOut = "manager/fetchInOut/" + no_invoice.split("/").join("-");

  $.ajax({
    url: "<?= base_url(); ?>" + urlFetchInOut,
    success: function(result) {
      let results = JSON.parse(result);
      let data = "";

      if (!results[0]) {
        // data = `<option value="">Pilih manager</option>`;
      } else {
        for (let i = 0; i < results.length; i++) {
          data += `
          <tr>
          <td>${results[i].keterangan}</td>
          <td>${results[i].debit}</td>
          <td>${results[i].kredit}</td>
          </tr>
          `;
        }
      }

      $('#show_data_inout').html(data);
    }
  });
}

function fetchData(jabatan) {
  // let fetchUrl = "manager/fetchData/" + weekending + "/" + jabatan + "/" + manager;

  let urlFetchMgr = "";

  if ($('#koreksi').prop("checked")) {
    urlFetchMgr = "manager/allMgr/" + jabatan + "/koreksi";
  } else {
    urlFetchMgr = "manager/allMgr/" + jabatan;
  }

  // alert(jabatan);

  $.ajax({
    url: "<?= base_url(); ?>" + urlFetchMgr,
    success: function(result) {
      let results = JSON.parse(result);
      let data = "";

      if (!results[0]) {
        data = `<option value="">Pilih manager</option>`;
      } else {
        data = `<option value="">Pilih manager</option>`;
        for (let i = 0; i < results.length; i++) {
          data += `
          <option value="${results[i].nama}">${results[i].nama}</option>
          `;
        }
      }

      $('#manager').html(data);
                // $('#grand_total').val(results);
              }
            });
}

$('#kode').on('change', function() {
      let barang = $('#kode').val();
      let fetchUrl = "manager/barang/" + barang;

      $.ajax({
            url: "<?= base_url(); ?>" + fetchUrl,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                $('#nama').val(results[0].nama);
                $('#stok').val(results[0].qty);
                $('#otc').val(results[0].sebelumpajak);
                $('#ftc').val(results[0].hargasetoran);
            }
        });
    });

</script>