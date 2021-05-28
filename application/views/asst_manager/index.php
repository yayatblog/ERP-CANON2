<!-- <ol class=""> -->


<style>
    .container-bottom {
        padding-top: 2px;
        transform: translateY(500px);
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

    <h5 class="text-bold">
        Assistant Manager
    </h5>
    <div class="row mt-3 mb-2">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="weekending" class="input-group-text">Weekending :</label>
                </div>
                <input type="date" name="weekending" id="weekending" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="noinv" class="input-group-text">No. Inv :</label>
                </div>
                <input type="text" name="noinv" id="noinv" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="pilmanager" class="input-group-text">Nama Asmen :</label>
                </div>
                <input type="text" name="pilmanager" id="pilmanager" class="form-control form-control-sm">
                <input type="text" name="pilmanager" id="pilmanager" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="security" class="input-group-text">Akun Security :</label>
                </div>
                <input type="text" name="security" id="security" class="form-control form-control-sm">
                <input type="text" name="security" id="security" class="form-control form-control-sm">
            </div>
        </form>
    </div>
    <div class="col-lg-6">
        <form action="" method="post">
        <div class="input-group input-group-sm mb-1">
                <div class="input-group-prepend">
                    <label for="jabatan" class="input-group-text">Weekending :</label>
                </div>
                <select name="jabatan" id="jabatan" class="form-control form-control-sm">
                    <option value=""></option>
                    <option value="">Pilih Weekending Up</option>
                    <option value=""></option>
                    <!-- <option value=""></option> -->
                </select>
            </div>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="jabatan" class="input-group-text">Pilih Asmen :</label>
                </div>
                <select name="jabatan" id="jabatan" class="form-control form-control-sm">
                    <option value=""></option>
                    <option value="">Branch Manager</option>
                    <option value="">Tenant Manager</option>
                    <!-- <option value=""></option> -->
                </select>
            </div>
            <!-- <div class="d-flex mt-1"> -->
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Manager :</label>
                    </div>
                    <!-- <select name="manager" id="manager" class="form-control form-control-sm"> -->
                        <input type="text" class="form-control">
                        <!-- <option value=""></option>
                        <option value=""></option> -->
                        <!-- <option value="">Pilihan #3</option> -->
                    <!-- </select> -->
                </div>
            
               
            <div class="input-group input-group-sm mt-1">
            <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">ID :</label>
                    </div>
                    <!-- <select name="manager" id="manager" class="form-control form-control-sm"> -->
                    <input type="text" class="form-control">

                        <!-- <option value=""></option>
                        <option value="">Branch Manager</option>
                        <option value="">Asistant Manager</option>
                        <option value="">Win2 Manager</option> -->
                    <!-- </select> -->
            </div>
        </form>
    </div>
</div>

    <h5 class="text-bold mt-4">Penjualan</h5>
    <a href="<?= base_url('asst_manager/tambah');?>" class="btn btn-primary mb-2">Tambah Data</a>
    <a href="<?= base_url('asst_manager/tambah');?>" class="btn btn-danger mb-2">Ekspor PDF</a>
    <div class="table-responsive">
    <!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
        <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

                <thead>
                    <tr >
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>QTY</th>
                        <th>O/C</th>
                        <th>Total O/C</th>
                        <th>F/C</th>
                        <th>Total F/C</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    <?php foreach ($manager as $man): ?>
                    <tr>
                        <td width="">
                            <?php echo $i;?>
                        </td>
                        <td>
                            <?php echo $man['kode_id'] ?>
                        </td>
                        <td width="">
                            <?php echo $man['nama'] ?>
                        </td>
                        <td>
                            <?php echo $man['qty'] ?>
                        </td>
                        <td>
                            <?php echo $man['otc'] ?>
                        </td>
                        <td>
                            <?php echo $man['totalotc'] ?>
                        </td>
                        <td class="">
                            <?php echo $man['ftc']?>
                        </td>
                        <td class="">
                            <?php echo $man['totalftc']?>
                        </td>
                        
                        <td>
                        
                        <div class="btn-group" >
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu">
                            <a href="<?php echo base_url();?>asst_manager/edit/<?= $man['id'];?>" class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
                            <a href="<?= base_url();?>asst_manager/hapus/<?= $man['id'];?>" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                            </div>
                        </div>
                        </td>
                    </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
    <div class="row">
                <div class="col-lg-4">
                    <h5 class="text-dark text-bold">Pengeluaran</h5>
                    <!-- <a href="" class="btn btn-sm btn-info">Tambah</a> -->
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
                    <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th colspan="2">Total Qty</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Merch P W/ Guarantee 
                                </th>
                                <td>
                                    <input type="text" name="merchpw" id="merchpw" class="form-control form-control-sm" value="1.1" style="height: 25px; width: 40px;">
                                </td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th colspan="2">Penjualan Kotor</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th colspan="2">Hutang Dagang</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th colspan="2">Laba Kotor Penjualan</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Untung</th>
                                <td>
                                    <div class="form-inline">
                                        <input type="text" name="untung" id="untung" class="form-control form-control-sm" value="20" style="height: 25px; width: 40px;">&nbsp;
                                        <span>%</span>
                                    </div>
                                </td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Simpanan di HO</th>
                                <td class="text-right">0</td>
                            </tr>
                            <tr>
                                <th>Pengeluaran Manager</th>
                                <td class="text-right">0</td>
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
                                <td class="text-right">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <h6 class="text-dark text-bold">Piutang / (Hutang)</h6>
                    <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Saldo Awal</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Masuk / (Keluar)</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Saldo Akhir</th>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
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
            <!-- <div class="col-lg-4 text-dark">
                <div class="input-group">
                    <label for="weekending">Akun Setoran :</label>
                    <div class="form-inline">
                        <input type="date" name="weekending" id="weekending" class="form-control form-control-sm" style="width: 200px;">&nbsp;
                        <button class="btn btn-warning btn-sm text-dark">Tambah Akun</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 text-dark text-right">
                <button class="btn btn-sm btn-success">Proses</button>
            </div>
        </div> -->
    </div>
    <!-- <div class="container container-bottom" style="display: flex; flex-direction: column; width: 100%; position: absolute; bottom: 0; box-sizing: border-box; align-self: center">
        <div class="text-center">
            <i class="fa fa-arrow-up text-primary expander animate" style="cursor: pointer;"></i>
        </div>
        <footer class="bg-primary pt-3" id="expandElement" style="padding-top: 30px; padding-bottom: 35px; flex: 1;">
            <div class="row">
                <div class="col-lg-4">
                    <h5 class="text-dark text-bold">Pengeluaran / Pemasukan</h5>
                    <a href="" class="btn btn-sm btn-info">Tambah</a>
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
                    <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th colspan="2">Total Qty</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Merch P W/ Guarantee 
                                </th>
                                <td>
                                    <input type="text" name="merchpw" id="merchpw" class="form-control form-control-sm" value="1.1" style="height: 25px; width: 40px;">
                                </td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th colspan="2">Penjualan Kotor</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th colspan="2">Hutang Dagang</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th colspan="2">Laba Kotor Penjualan</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Untung</th>
                                <td>
                                    <div class="form-inline">
                                        <input type="text" name="untung" id="untung" class="form-control form-control-sm" value="20" style="height: 25px; width: 40px;">&nbsp;
                                        <span>%</span>
                                    </div>
                                </td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Simpanan di HO</th>
                                <td class="text-right">0</td>
                            </tr>
                            <tr>
                                <th>Pengeluaran Manager</th>
                                <td class="text-right">0</td>
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
                                <td class="text-right">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <h6 class="text-dark text-bold">Piutang / (Hutang)</h6>
                    <table class="table table-responsive table-sm text-dark" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <th>Saldo Awal</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Masuk / (Keluar)</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Saldo Akhir</th>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
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
                <div class="input-group">
                    <label for="weekending">Akun Setoran :</label>
                    <div class="form-inline">
                        <input type="date" name="weekending" id="weekending" class="form-control form-control-sm" style="width: 200px;">&nbsp;
                        <button class="btn btn-warning btn-sm text-dark">Tambah Akun</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-4 text-dark text-right">
                <button class="btn btn-sm btn-success">Proses</button>
            </div>
        </div>
    </footer>
</div> -->