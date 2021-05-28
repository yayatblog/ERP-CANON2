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
<!-- </ol> -->

<style>
    .container-bottom {
        padding-top: 2px;
        transform: translateY(120px);
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
            <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Account <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
                <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>    
    </div>
    <?php endif;?>

    <?php if($this->session->flashdata('flash')) :?>
    <div class="row mt-3">
        <div class="col md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data Account <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
                <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>    
    </div>
    <?php endif;?>

    <h5 class="text-bold">Buku Besar</h5>

    <div class="row mt-3">
        <div class="col-lg-6">
            <h6>
                Akun
            </h6>
            <form action="" method="post">
                <div class="form-group input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="weekending">Weekending</label>
                    </div>
                    <select class="form-control" id="weekending">
                        <option></option>
                        <option>Weekending Up</option>
                        <option></option>
                    </select>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h6>
            <form action="" method="post">
            <label for="" >Saldo normal</label>
            <input type="text" name="kredit" id="" class="form-control" style="width:100px;">
            </form>
                <!-- Saldo normal : Kredit -->
            </h6>
            <form action="" method="post">
            
                <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                <label for="dosen_pa" class="form-control">Kode Akun</label>
                <select class="form-control" name="dosen_pa" id="dosen_pa">
                <option value="" class="form-control">-- Pilih --</option>
                <option value="">K-100 Kas</option>
                <option value="">K-90001 Sesa</option>
                <option value="">K-990001 Sesa</option>
                <option value="">K-200 Bank BCA</option>
                <option value="">K-201 Bank Mandiri</option>
                <option value="">K-202 Bank BRI</option>
                <option value="">K-203 Bank BNI</option>
                <option value="">K-300 Penjualan</option>
                <option value="">K-301 Potogan Penjualan</option>
                <option value="">K-302 Return Penjualan</option>
                <option value="">K-304 Penjualan Sparepart</option>
                <option value="">K-305 Pendapatan Service</option>
                <option value="">K-306 Pendapatan Biaya Lai Service</option>
                <option value="">K-307 Potongan Service</option>
                <option value="">K-401 Potongan Pembelian</option>
                </select>
             </div>
                </div>
                <div class="form-group input-group input-group-sm" style="width:413px;">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="saldoawal">Saldo Awal</label>
                    </div>
                    <input type="text" class="form-control" id="saldoawal" />
                </div>
                <button type="submit" class="btn btn-primary btn-sm" style="float: right;">Cari</button>
            </form>
        </div>
    </div>

    <a href="<?= base_url('bukubesar/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
    <a href="<?=base_url('bukubesar/cetak');?>" class="btn btn-success mb-2">Cetak</a>
    <div class="table-responsive">
    <!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
        <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

            <thead>
                <tr style="text-align:center">
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Transaksi</th>
                    <th>No. Bukti</th>
                    <th>Debit</th>
                    <th>Kredit</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                <?php foreach ($bukubesar as $buk): ?>
                <tr>
                    <td style="text-align:center">
                        <?php echo $i;?>
                    </td>
                    <td>
                        <?php echo $buk['tgl'] ?>
                    </td>
                    <td>
                        <?php echo $buk['transaksi'] ?>
                    </td>
                    <td width="">
                        <?php echo $buk['no_bukti'] ?>
                    </td>
                    <td>
                        <?php echo $buk['debit'] ?>
                    </td>
                    <td>
                        <?php echo $buk['kredit'] ?>
                    </td>
                    <td>
                        <?php echo $buk['saldo'] ?>
                    </td>
                    
                    <!-- <td style="text-align:center"> -->
                    
                    <!-- <div class="btn-group" > -->
                        <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu"> -->
                        
                        <!-- </div> -->
                    <!-- </div> -->
                    <!-- </td> -->
                </tr>
                <?php $i++;?>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<div class="container">
<div class="row">
            <div class="col-md-6">
                <div class="form-group input-group input-group-sm mb-1" >
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="totaldebit">Total Debit</label>
                    </div>
                    <input type="text" class="form-control" id="totaldebit" />
                </div>
                <div class="form-group input-group input-group-sm" >
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="totalkredit">Total Kredit</label>
                    </div>
                    <input type="text" class="form-control" id="totalkredit" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group input-group input-group-sm" ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="saldoakhir">Saldo Akhir</label>
                    </div>
                    <input type="text" class="form-control" id="saldoakhir" />
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
            <div class="col-md-6">
                <div class="form-group input-group input-group-sm mb-1" style="margin: 0;">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="totaldebit">Total Debit</label>
                    </div>
                    <input type="text" class="form-control" id="totaldebit" />
                </div>
                <div class="form-group input-group input-group-sm" style="margin: 0;">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="totalkredit">Total Kredit</label>
                    </div>
                    <input type="text" class="form-control" id="totalkredit" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group input-group input-group-sm" style="margin: 0;">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="saldoakhir">Saldo Akhir</label>
                    </div>
                    <input type="text" class="form-control" id="saldoakhir" />
                </div>
            </div>
        </div>
    </footer>
</div> -->