<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">
<!-- <h1>Stok Akhir</h1> -->
<div class="row mt-3 mb-2">
    <div class="col-lg-4">
        <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="weekending" class="input-group-text">Cari Kode Barang:</label>
                </div>
                <!-- <select name="" id="" class="form-control">
                    <option value="">Weekending Up</option>
                </select> -->
                <input type="text" class="form-control">
            </div>
            <div class="input-group input-group-sm mt-1 mb-1">
                
            </div>
           
        </form>
    </div>
    <div class="col-lg-4">
    <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="weekending" class="input-group-text">Tgl Awal:</label>
                </div>
                <input type="date" class="form-control">
                
            </div>
            <div class="input-group input-group-sm mt-1 mb-1">
                <div class="input-group-prepend">
                    <label for="noinv" class="input-group-text">Tgl Akhir :</label>
                </div>
                <input type="date" class="form-control">
            </div>
           
        </form>     
            </div>
            <div class="col-lg-4">
            <div class="input-group input-group-sm mt-1 mb-1">
                <div class="">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>
            </div>
    </div>
<!-- <div class="" style="background-color:blue;margin-left:2px;border-radius:5px;width:190px;color:white">
<p style="margin-left:2px;padding-left:5px">Kategori 1 = Elektronik</p>
<p style="margin-left:2px;padding-left:5px">Kategori 2 = ATK</p>
</div> -->
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

  

</ol>
<!-- <div style="margin-left:5px">

<div class="">
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
-->

<?php endif;?>

<a href="<?= base_url('barang/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center;">
                <th>No.</th>
                <th>Kode</th>
                <th>Barang</th>
                <th>Manager</th>
                <th>Gudang</th>
                <th>Stok</th>
                <th>HPP</th>
                <th>Total</th>
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($produk as $erp): ?>
            <tr>
                <td width="">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $erp['kode'] ?>
                </td>
                <td width="">
                    <?php echo $erp['nama'] ?>
                </td>
                
                <td>
                    <?php echo $erp['manager'] ?>
                </td>
                <td>
                    <?php echo $erp['gudang'] ?>
                </td>
                <td class="">
                    <?php echo $erp['qty']?>
                </td>
                <td class="">
                    <?php echo $erp['hpp']?>
                </td>
                <td class="">
                    <?php echo $erp['jumlah']?>
                </td>
                <!-- <td>
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                    <a href="<?php echo base_url();?>barang/edit/<?= $erp['id'];?>" class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>barang/hapus/<?= $erp['id'];?>" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                </div>
                </td> -->
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
    </div>
</div>