<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">



  

</ol>
<div style="margin-left:5px">

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
<?php endif;?>
<div class="row mt-3 mb-2">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="weekending" class="input-group-text">Tgl Awal :</label>
                </div>
                <input type="date" name="weekending" id="weekending" class="form-control form-control-sm">
            </div>
            <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                    <label for="noinv" class="input-group-text">Tgl Akhir :</label>
                </div>
                <input type="date" name="weekending" id="weekending" class="form-control form-control-sm">
            </div>
            
        </form>
    </div>
    <div class="col-lg-6">
        <form action="" method="post">
        
            
            <!-- <div class="d-flex mt-1"> -->
                
            
               
            <div class="input-group input-group-sm mt-1">
            <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Cari User ID :</label>
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
<a href="<?= base_url('barang/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr >
                <th>No.</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>User ID</th>
                <th>Menu</th>
                <th>Tombol</th>
                <th>Reference</th>
                <th>Keterangan</th>
                <!-- <th>Unit Rusak</th>
                <th>HPP</th>
                <th>Harga Sebelum Pajak</th>
                <th>PPN</th>
                <th>Harga Setelah Pajak</th>
                <th>Harga Setoran</th>
                <th>Jumlah Modal</th> -->
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php
            // foreach ($produk as $erp): ?>
            <tr>
                <td width="">
                    <?php echo $i;?>
                </td>
                <td>
                    12-09-2020
                    <?php 
                    //echo $erp['kode'] ?>
                </td>
                <td width="">
                    07-00-09.00
                    <?php 
                    //echo $erp['nama'] ?>
                </td>
                <td>
                    1105
                    <?php 
                    //echo $erp['id_role'] ?>
                </td>
                <td>
                Supriyatna
                    <?php 
                    //echo $erp['manager'] ?>
                </td>
                <td>
                Gudang 1
                    <?php 
                    //echo $erp['gudang'] ?>
                </td>
                <td class="">
                100
                    <?php 
                    //echo $erp['qty']?>
                </td>
                <td class="">
                10
                    <?php 
                    //echo $erp['unitbagus']?>
                </td>
                
                <td>
                
                <!-- <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                    <a href="<?php echo base_url();?>barang/edit/<?= $erp['id'];?>" class="btn btn-success" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>barang/hapus/<?= $erp['id'];?>" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                </div> -->
                </td>
            </tr>
            <?php $i++;?>
            <?php 
        //endforeach; ?>

        </tbody>
    </table>
    </div>
</div>