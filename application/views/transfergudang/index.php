<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Transfer Gudang <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Transfer Gudang <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row mt-3 mb-2">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="weekending" class="input-group-text">Tanggal Awal :</label>
                </div>
                <input type="date" name="weekending" id="weekending" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="noinv" class="input-group-text">Tanggal Akhir :</label>
                </div>
                <input type="date" name="noinv" id="noinv" class="form-control form-control-sm">
            </div>
           
        </form>
    </div>
    <div class="col-lg-6">
        <form action="" method="post">
        <div class="input-group input-group-sm mb-1">
                <div class="">
                    <label for="jabatan" class="btn btn-primary">Cari</label>
                </div>
                
            </div>
            
            <!-- <div class="d-flex mt-1"> -->
            
        </form>
    </div>
</div>
<a href="<?= base_url('transfer_gudang/tambah');?>" class="btn btn-primary mb-2">Tambah Data</a>
<a href="<?= base_url('transfer_gudang/ekspor');?>" class="btn btn-danger mb-2">Ekspor PDF</a>


<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Tanggal</th>
                <th>No. Transfer</th>
                <th>Keterangan</th>
                <th>Kode</th>
                <th>Barang</th>
                <th>Gudang Asal</th>
                <th>Gudang Tujuan</th>
                <th>Qty</th>
            
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($tf_gudang as $tfg): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td width="">
                    <?php echo $tfg['tgl'] ?>
                </td>
                <td width="">
                    <?php echo $tfg['no_transfer'] ?>
                </td>
                <td>
                    <?php echo $tfg['keterangan'] ?>
                </td>
                <td>
                    <?php echo $tfg['kode'] ?>
                </td>
                <td>
                    <?php echo $tfg['barang'] ?>
                </td>
                <td class="">
                    <?php echo $tfg['gudang_asal']?>
                </td>
                <td class="">
                    <?php echo $tfg['gudang_tujuan']?>
                </td>
                <td class="">
                    <?php echo $tfg['qty']?>
                </td>
                
                <td style="text-align:center">
                    <a href="<?php echo base_url();?>transfer_gudang/edit/<?= $tfg['id'];?>" class="btn btn-success"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>transfer_gudang/hapus/<?= $tfg['id'];?>" class="btn btn-danger"  onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
    </div>
</div>