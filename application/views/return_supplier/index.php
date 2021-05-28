<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">



  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Return Supplier <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Return Supplier <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
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
<a href="<?= base_url('return_supplier/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead> 
            <tr style="text-align:center">
                <th>No.</th>
                <th>Tanggal</th>
                <th>No. Faktur</th>
                <th>Keterangan</th>
                <th>Kode</th>
                <th>Barang</th>
                <th>Gudang Asal</th>
                <th>Gudang Tujuan</th>
                <th>Gudang Jumlah </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($return_supplier as $ret): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $ret['tanggal'] ?>
                </td>
                <td width="">
                    <?php echo $ret['no_faktur'] ?>
                </td>
                <td width="">
                    <?php echo $ret['keterangan'] ?>
                </td>
                <td width="">
                    <?php echo $ret['kode'] ?>
                </td>
                <td width="">
                    <?php echo $ret['barang'] ?>
                </td>
                <td width="">
                    <?php echo $ret['gudang_asal'] ?>
                </td>
                <td width="">
                    <?php echo $ret['supplier_tujuan'] ?>
                </td>
                <td width="">
                    <?php echo $ret['jumlah'] ?>
                </td>
                <td style="text-align:center">
                
                <!-- <div class="btn-group" > -->
                    <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu"> -->
                    <a href="<?php echo base_url();?>return_supplier/edit/<?= $ret['id'];?>" class="btn btn-success" style=""><i class="fa fa-edit"></i></i></a>
                    <a href="<?= base_url();?>return_supplier/hapus/<?= $ret['id'];?>" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i></a>
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