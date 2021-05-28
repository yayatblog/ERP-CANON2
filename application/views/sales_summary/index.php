<div class="container content-wrapper col-12">

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
</h2>
</ol> -->

<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Sales Sum <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Sales Sum <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<div class="row mb-4">
    <div class="col-lg-4">
        <div class="input-group input-group-sm">
            <div class="input-group-prepend">
                <label for="weekending" class="input-group-text">Weekending</label>
            </div>
            <select name="weekending" id="weekending" class="form-control" onchange="getData(this.value);">
                <option value="">Pilih tanggal</option>
                <option value="up">Weekending Up</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="input-group input-group-sm">
            <div class="input-group-prepend">
                <label for="weekending" class="input-group-text">Manager</label>
            </div>
            <select name="weekending" id="weekending" class="form-control">
                <option value="">Pilih manager</option>
                <option value="up">Weekending Up</option>
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <button class="btn btn-success btn-sm">Export</button>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <h5 class="text-bold">Penjualan</h5>
        <div class="table-responsive">
            <!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
                <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

                    <thead>
                        <tr style="text-align:center">
                            <th>No.</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Manager</th>
                            <th>Total PCS</th>
                        </tr>
                    </thead>
                    <tbody id="show_data_pjl">

                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-6">
            <h5 class="text-bold">Pemasukan / Pengeluaran</h5>
            <div class="table-responsive">
                <!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
                    <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

                        <thead>
                            <tr style="text-align:center">
                                <th>No.</th>
                                <th>Keterangan</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                            </tr>
                        </thead>
                        <tbody id="show_data_inout">

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

<div class="row mt-4">
    <div class="col-lg-4">
        <table cellspacing="1">
            <tr>
                <td>Total PCS</td>
                <td class="text-right" id="totalpcs"></td>
            </tr>
            <tr>
                <td>Penjualan sebelum PPN</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>PPN 10%</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Total</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Biaya Administrasi</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Biaya Konsultan</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Biaya Pemasukan</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Biaya Pengeluaran</td>
                <td class="text-right">0</td>
            </tr>
        </table>
    </div>
    <div class="col-lg-4">
        <table cellspacing="1">
            <tr>
                <td>Simpanan Asst.Mgr (Masuk)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Simpanan Asst.Mgr (Keluar)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Simpanan Win2.Mgr (Masuk)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Simpanan Win2.Mgr (Keluar)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Simpanan Mgr (Masuk)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Simpanan Mgr (Keluar)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Jml. Setoran</td>
                <td class="text-right">0</td>
            </tr>
        </table>
    </div>
    <div class="col-lg-4">
        <table cellspacing="1">
            <tr>
                <td>Gross Sales (On PNL)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Gross Sales Last Week (On PNL)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Gross Sales Merch Payment (On PNL)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Total Setoran (Mgg lalu)</td>
                <td class="text-right">0</td>
            </tr>
            <tr>
                <td>Total PCS (Mgg lalu)</td>
                <td class="text-right">0</td>
            </tr>
        </table>
    </div>
</div>

</div>

<script>
    // getAllPenjualan();

    function getData(weekending) {
        $.ajax({
            url: "<?= base_url('sales_sum/getData/'); ?>" + weekending,
            success: function(result) {
                let results = JSON.parse(result);
                let data = ``;

                for (let i = 0; i < results.length; i++) {
                    data += `
                    <tr>
                    <td>${i+1}</td>
                    <td>${results[i].kode}</td>
                    <td>${results[i].nama}</td>
                    <td>${rupiahConverter.format(results[i].ftc)}</td>
                    <td>${results[i].qty}</td>
                    </tr>
                    `;
                }

                $('#show_data_pjl').html(data);
            }
        });

        $.ajax({
            url: "<?= base_url('sales_sum/getDataInOut/'); ?>" + weekending,
            success: function(result) {
                let results = JSON.parse(result);
                let data = ``;

                for (let i = 0; i < results.length; i++) {
                    data += `
                    <tr>
                    <td>${i+1}</td>
                    <td>${results[i].keterangan}</td>
                    <td>${rupiahConverter.format(results[i].debit)}</td>
                    <td>${rupiahConverter.format(results[i].kredit)}</td>
                    </tr>
                    `;
                }

                $('#show_data_inout').html(data);
            }
        });

        $.ajax({
            url: "<?= base_url('sales_sum/getSUMPcs/'); ?>" + weekending,
            success: function(result) {
                let results = JSON.parse(result);
                $('#totalpcs').html(results[0].totalqty);
            }
        });
    }
</script>