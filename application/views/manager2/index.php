

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
                    <label for="tanggal" class="input-group-text">Tanggal :</label>
                </div>
                <input type="text" name="tanggal" id="tanggal" class="form-control form-control-sm datepicker" data-date-format="dd-mm-yyyy" value="<?= date("d-m-Y"); ?>" autocomplete="off" style="cursor: default" />
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
                <input type="text" name="pilmanager" id="pilmanager" class="form-control form-control-sm" value="<?= $this->session->userdata('name'); ?>">
                <input type="text" name="pilmanager2" id="pilmanager2" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="security" class="input-group-text">Akun Security :</label>
                </div>
                <input type="text" name="security" id="security" class="form-control form-control-sm" value="<?= $this->session->userdata('username'); ?>">
                <input type="text" name="security2" id="security2" class="form-control form-control-sm">
            </div>
        </form>
    </div>
</div>

<h5 class="text-bold mt-4">Penjualan</h5>
<button class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalTambah">Tambah Data</button>
<a href="<?= base_url('manager2/proses');?>" class="btn btn-success mb-2">Proses</a>
<a href="<?= base_url('manager2/cari');?>" class="btn btn-warning mb-2">Cari</a>
<!-- <a href="<?= base_url('manager/export');?>" class="btn btn-danger mb-2">Export PDF</a> -->

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
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody id="show_data">
                <tr>
                    <td colspan="9" class="text-center">Tidak ada data ditampilkan.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- ./table-responsive -->

</div>
<!-- ./container-fluid -->

<div class="container-fluid ml-2 mr-2">
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-responsive text-center table-full-width table-sm text-dark" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <th>Total Qty</th>
                        <td style="text-align: right">0</td>
                    </tr>
                    <tr>
                        <th>Jumlah Penjualan</th>
                        <td style="text-align: right">0</td>
                    </tr>
                    <tr>
                        <th>Jumlah Pengeluaran</th>
                        <td style="text-align: right">0</td>
                    </tr>
                    <tr>
                        <th>Jumlah Disetor</th>
                        <td style="text-align: right">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah-->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahlabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambahlabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('manager2/tambahDataPenjualanManager');?>" method="POST"> 
        <div class="modal-body">
          <div class="form-group">
            <label for="kode">Kode</label>
            <select name="kode" id="kode" class="form-control">
              <option>Pilih kode barang</option>
              <?php foreach($kode_barang as $kode_brg): ?>
              <option value="<?= $kode_brg['kode']; ?>"><?= $kode_brg['kode']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" id="nama" class="form-control" value="" readonly/>
          </div>
          <div class="form-group">
            <label for="gudang">Gudang</label>
            <input name="gudang" id="gudang" class="form-control" value="<?= $this->session->userdata('gudang'); ?>" readonly />
          </div>
          <div class="form-group">
            <label for="qty">Qty</label>
            <input name="qty" id="qty" class="form-control" value="0" />
          </div>
          <div class="form-group">
            <label for="stok">Stok</label>
            <input name="stok" id="stok" class="form-control" value="0" readonly/>
          </div>
          <div class="form-group">
            <label for="ftc">F/C</label>
            <input name="ftc" id="ftc" class="form-control" value="0"/>
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

    allData();

    function allData() {
        let fetchUrl = "manager2/tampil_data";

        $.ajax({
            url: "<?= base_url(); ?>" + fetchUrl,
            success: function(result) {
                let results = JSON.parse(result);
                let data = "";

                if (!results[0]) {
                    data = `<tr><td colspan="9" class="text-center">Tidak ada data ditampilkan.</td></tr>`;
                } else {
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
                        <td class="text-center">
                        <a href="<?= base_url();?>manager2/edit/${results[i].id}" class="btn btn-success mt-2"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                        <a href="<?= base_url();?>manager2/hapus/${results[i].id}" class="btn btn-danger mt-2" style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                        </td>
                        </tr>`;
                    }
                }

                $('#show_data').html(data);
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