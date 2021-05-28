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
            <h6>Akun</h6>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weekending</label>
                </div>
                <select class="form-control" id="weekending" onchange="getDefaultSaldo($(this).val(), $('#kode_akun').val())">
                    <option>Pilih tanggal</option>
                    <option value="up">Weekending Up</option>
                    <?php
                    foreach($weekending as $w) : 
                        $w_to = explode(',', $w['weekending']);
                    ?>
                    <option value="<?= $w['weekending']; ?>"><?= $w_to[0].' s/d '.$w_to[1]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <h6>Saldo normal: <span>Kredit</span></h6>
            <div class="input-group input-group-sm mb-2">
                <div class="input-group-prepend">
                    <label for="kode_akun" class="input-group-text">Kode Akun</label>
                </div>
                <select class="form-control" name="kode_akun" id="kode_akun" style="border-top-right-radius: 3px; border-bottom-right-radius: 3px" onchange="getDefaultSaldo($('#weekending').val(), $(this).val())">
                    <option value="">Pilih akun</option>
                    <?php foreach( $akun as $a ): ?>
                        <option value="<?= $a['kode']; ?>"><?= "K-".$a['kode']." ".$a['nama']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="saldoawal">Saldo Awal</label>
                </div>
                <input type="text" class="form-control" id="saldoawal" style="border-top-right-radius: 3px; border-bottom-right-radius: 3px" value="" readonly />&nbsp;
            </div>
        </div>
    </div>
    
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
            <tbody id="show_data">
                <tr><td colspan="7" class="text-center">Tidak ada data ditampilkan.</td></tr>
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-2">
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

<script>

    function getDefaultSaldo(weekending, kode_akun) {
        // let res = "";
        let vals = $.ajax({
            url: "<?= base_url('bukubesar/getDefaultSaldo/'); ?>" + kode_akun,
            success: function(result) {
                getSUMSaldo(kode_akun);
                getCurrentSaldo(kode_akun);
                getData(weekending, kode_akun, JSON.parse(result).saldo_default);
            }
        });
    }

    function getCurrentSaldo(kode_akun) {
        let res = "";
        let vals = $.ajax({
            url: "<?= base_url('bukubesar/getCurrentSaldo/'); ?>" + kode_akun,
            success: function(result) {
                let results = JSON.parse(result);
                $('#saldoakhir').val(rupiahConverter.format(results.saldo_akhir));
            }
        });
    }

    function getSUMSaldo(kode_akun) {
        let res = "";
        let vals = $.ajax({
            url: "<?= base_url('bukubesar/getSUMSaldo/'); ?>" + kode_akun,
            success: function(result) {
                let results = JSON.parse(result);
                $('#totaldebit').val(rupiahConverter.format(results.jmldebit));
                $('#totalkredit').val(rupiahConverter.format(results.jmlkredit));
            }
        });
    }

    function getData(weekending, kode_akun, saldoAwal) {
        $.ajax({
            url: "<?= base_url('bukubesar/getData'); ?>",
            data: { 'weekending': weekending, 'kode_akun': kode_akun },
            dataType: 'json',
            type: "POST",
            success: function(results) {
                let data = "";

                if (!results || results == "") {
                    data = `<tr><td colspan="7" class="text-center">Tidak ada data ditampilkan.</td></tr>`
                } else {
                    let saldo = 0;

                    for (let i = 0; i < results.length; i++) {

                        data += `
                        <tr class="text-center">
                        <td>
                        ${i+1}
                        </td>
                        <td>
                        ${results[i].tgl}
                        </td>
                        <td>
                        ${results[i].transaksi}
                        </td>
                        <td width="">
                        ${results[i].no_bukti}
                        </td>
                        <td>
                        ${results[i].debit != "" ? rupiahConverter.format(results[i].debit) : "-"}
                        </td>
                        <td>
                        ${results[i].kredit != "" ? rupiahConverter.format(results[i].kredit) : "-"}
                        </td>
                        <td>`;

                        if (results[i].debit != "") {
                            if (i > 0) {
                                saldo += Number(results[i].debit);
                            } else {
                                saldo = Number(saldoAwal) + Number(results[0].debit);
                            }
                        } else {
                            if (i > 0) {
                                saldo -= Number(results[i].kredit);
                            } else {
                                saldo = Number(saldoAwal) - Number(results[0].kredit);
                            }
                        }

                        data += `
                        ${rupiahConverter.format(saldo)}
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
                        `;
                    }
                }

                $('#saldoawal').val(rupiahConverter.format(saldoAwal));
                $('#show_data').html(data);
            }
        });
    }
</script>