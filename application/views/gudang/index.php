<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Gudang <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Gudang <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row mt-3">
        <div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Kepada :</label>
                    </div>
                    <input type="text" name="name" id="name" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">Alamat :</label>
                    </div>
                    <input type="text" name="alamat" id="alamat" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Kota/Kec :</label>
                    </div>
                    <input type="text" name="kota" id="kota" class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="security" class="input-group-text">No. Telepon :</label>
                    </div>
                    <input type="text" name="telepon" id="telepon" class="form-control form-control-sm">
                    <!-- <input type="text" name="security" id="security" class="form-control form-control-sm"> -->
                </div>
            </form>
        </div>
        <!-- <div class="col-lg-2">
        <form action="" method="post">
        <button type="submit" class="btn btn-primary">Show All </button>
        </form>
        </div> -->
        <div class="col-lg-6">
            <form action="<?= base_url('');?>" method="post">
                <div class="d-flex">
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="taggal" class="input-group-text">Tanggal :</label>
                    </div>
                    <input type="date" name="tanggal" id="tanggal" class="form-control form-control-sm">
                </div>
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="no_do" class="input-group-text">No. DO :</label>
                    </div>
                    <input type="text" name="no_do" id="no_do" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="manager_gudang" class="input-group-text">Manager Gudang :</label>
                    </div>
                    <input type="text" name="manager_gudang" id="manager_gudang" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="no_kontainer" class="input-group-text">No. Kontainer :</label>
                    </div>
                    <input type="text" name="no_kontainer" id="no_kontainer" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="no_segel" class="input-group-text">No. Segel :</label>
                    </div>
                    <input type="text" name="no_segel" id="no_segel" class="form-control form-control-sm">
                </div>
                </div>   
            </form>
        </div>
        <!-- <div class="col-lg-2">
        <form action="" method="post">
        <button type="submit" class="btn btn-primary">Filter</button>
        </form>
        </div> -->
    </div>
<a href="<?= base_url('gudang/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<a href="<?= base_url('gudang/koreksi7  ');?>" class="btn btn-info mb-2">Koreksi</a>

<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Kode</th>
                <th>Nama Gudang</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($gudang as $erp): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $erp['kode'] ?>
                </td>
                <td width="">
                    <?php echo $erp['nama'] ?>
                </td>
                <td width="">
                    <?php echo $erp['alamat'] ?>
                </td>
                
                <td style="text-align:center">
                
                <!-- <div class="btn-group" > -->
                    <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu"> -->
                    <a href="<?php echo base_url();?>gudang/edit/<?= $erp['id'];?>" class="btn btn-success" style=""><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>gudang/hapus/<?= $erp['id'];?>" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
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