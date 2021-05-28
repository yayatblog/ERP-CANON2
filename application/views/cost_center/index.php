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
        transform: translateY(150px);
        transition: 0.3s ease;
    }

    .expand {
        transform: translateY(0px);
    }

    .tbl-custom tr td {
        width: 50px;
    }

</style>

<div class="container-fluid">
    <?php if($this->session->flashdata('flash2')) :?>
    <div class="row mt-3">
        <div class="col md-6">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Produk <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
            <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>    
    </div>
    <?php endif;?>

    <?php if($this->session->flashdata('flash')) :?>
    <div class="row mt-3">
        <div class="col md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data Produk <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
            <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>    
    </div>
    <?php endif;?>

    <h5 class="text-bold">Neraca Lajur</h5>

    <div class="row mt-3">
        <div class="col-lg-6">
            <form action="" method="post">
                <div class="form-group input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="weekending">Weekending</label>
                    </div>
                    <select class="form-control" id="weekending">
                        <option>Pilihan #1</option>
                        <option>Pilihan #2</option>
                        <option>Pilihan #3</option>
                    </select>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary btn-sm">Go</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <a href="<?= base_url('neraca/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
    <div class="table-responsive">
    <!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
        <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

            <thead>
                <tr style="text-align:center">
                    <th>No.</th>
                    <th>Nama Akun</th>
                    <th>Neraca Saldo
                    (Debit/Kredit)</th>
                    <th>Penyesuaian
                    (Debit/Kredit)</th>
                    <th>Neraca Saldo Penyesuaian
                    (Debit/Kredit)</th>
                    <th>Rugi Laba
                    (Debit/Kredit)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1;?>
                <?php foreach ($neraca as $ner): ?>
                <tr>
                    <td style="text-align:center">
                        <?php echo $i;?>
                    </td>
                    <td>
                        <?php echo $ner['nama_akun'] ?>
                    </td>
                    <td width="">
                        <?php echo $ner['neraca_saldo'] ?>
                    </td>
                    <td width="">
                        <?php echo $ner['penyesuaian'] ?>
                    </td>
                    <td width="">
                        <?php echo $ner['neracasaldo_penyesuaian'] ?>
                    </td>
                    <td width="">
                        <?php echo $ner['rugi_laba'] ?>
                    </td>
                    <td style="text-align:center">
                    
                    <!-- <div class="btn-group" > -->
                        <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu"> -->
                        <a href="<?php echo base_url();?>neraca/edit/<?= $ner['id'];?>" class="btn btn-success" style=""><i class="fa fa-edit"></i>Edit</i></a>
                        <a href="<?= base_url();?>neraca/hapus/<?= $ner['id'];?>" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                        <!-- </div> -->
                    <!-- </div> -->
                    </td>
                </tr>
                <?php $i++;?>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<div class="container-fluid container-bottom" style="display: flex; flex-direction: column; width: 100%; position: absolute; bottom: 0; box-sizing: border-box; align-self: center">
    <div class="text-center">
        <i class="fa fa-arrow-up text-primary expander animate" style="cursor: pointer;"></i>
    </div>
    <footer class="bg-primary" id="expandElement" style="padding-top: 30px; padding-bottom: 35px; flex: 1;">
        <div class="row">
            <div class="col-lg-6">
                <table style="margin: 0;" class="table table-responsive text-center table-sm text-light" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <table style="margin: 0;" class="table table-responsive text-center table-sm text-light tbl-custom" width="100%" cellspacing="0">
                    <tbody>
                        <tr>
                            <td>Jumlah</td>
                            <td class="text-right">0</td>
                            <td class="text-right">0</td>
                            <td class="text-right">0</td>
                            <td class="text-right">0</td>
                            <td class="text-right">0</td>
                            <td class="text-right">0</td>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <td style="width: 95px;">Laba Bersih</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">0</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </footer>
</div>
