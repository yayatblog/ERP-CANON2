<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">


  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Deposit <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Deposit <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row">
<div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Weekending Up :</label>
                    </div>
                    <select name="" id="" class="form-control">
                        <option value="" >Weekending Up</option>
                    </select>
                </div>
                
                
            </form>
        </div>
        <div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Jabatan :</label>
                    </div>
                    <select name="" id="" class="form-control">
                        <option value="">Pilih</option>
                        <option value="">Vice President</option>
                        <option value="">Divisional Manager</option>
                        <option value="">Branch Manager</option>
                        <option value="">Tenant Manager</option>
                        <option value="">Asistant Manager</option>
                        <option value="">Win2 Manager</option>
                    </select>
                </div>
                
                
                
            </form>
        </div>
</div>
<div class="row">
<div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Presentase:</label>
                    </div>
                        <input type="text" name="" id="" class="form-control mt-2">
                </div>
                
                
            </form>
        </div>
        <div class="col-lg-4">
            <form action="<?= base_url('');?>" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Deposit :</label>
                    </div>
                    <input type="text" name="" id="" class="form-control mt-2">
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Pengeluaran :</label>
                    </div>
                    <input type="text" name="" id="" class="form-control mt-2">
                </div>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text mt-2">Grand Total :</label>
                    </div>
                    <input type="text" name="" id="" class="form-control mt-2">
                </div>
                
            </form>
        </div>
</div>
<a href="<?= base_url('deposit/tambah');?>" class="btn btn-info mb-2 mt-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center;">
                <th>No.</th>
                <th>Tanggal</th>
                <th>Manager</th>
                <th>Cabang</th>
                <th>Jumlah Deposit</th>
                <th>Jumlah Pengeluaran</th>
                <th>Total Deposit</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($deposit as $dep): ?>
            <tr>
                <td style="text-align:center;">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $dep['tgl'] ?>
                </td>
                <td width="">
                    <?php echo $dep['manager'] ?>
                </td>
                <td>
                    <?php echo $dep['cabang'] ?>
                </td>
                <td>
                    <?php echo $dep['jumlah_deposit'] ?>
                </td>
                <td>
                    <?php echo $dep['jumlah_pengeluaran'] ?>
                </td>
                <td>
                    <?php echo $dep['total_deposit'] ?>
                </td>
                <td>
                    <?php echo $dep['status'] ?>
                </td>
                <td style="text-align:center;">
                  <a href="<?= base_url();?>deposit/hapus/<?= $dep['id'];?>" class="btn btn-danger mt-2" style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
    </div>
</div>