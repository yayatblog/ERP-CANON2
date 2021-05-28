<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

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
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Gross Sale <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Gross Sale <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="col-6">
<form action="" method="post">
    <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Weeekending</label>
                </div>
                <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value="">Weeekending Up</option>
                </select>
            </div>
        </form>
</div>
<a href="<?= base_url('gross_sale/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Manager</th>
                <th>Lokasi</th>
                <th>Gross Sales</th>
                <th>Profit</th>
                <th>Pcs</th>
                <th>Point</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($grosssale as $gro): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $gro['manager'] ?>
                </td>
                <td width="">
                    <?php echo $gro['lokasi'] ?>
                </td>
                <td width="">
                    <?php echo $gro['gross_sale'] ?>
                </td>
                <td width="">
                    <?php echo $gro['profit'] ?>
                </td>
                <td width="">
                    <?php echo $gro['pcs'] ?>
                </td>
                <td width="">
                    <?php echo $gro['point'] ?>
                </td>
                <td style="text-align:center">
                
                <!-- <div class="btn-group" > -->
                    <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu"> -->
                    <a href="<?php echo base_url();?>gross_sale/edit/<?= $gro['id'];?>" class="btn btn-success" style=""><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>gross_sale/hapus/<?= $gro['id'];?>" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    <!-- </div> -->
                <!-- </div> -->
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
    <div class="col-lg-12">
    <form action="" method="post">
    <div class="form-group input-group input-group-sm" >
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">TOTAL GROSS SALES MINGGU INI</label>
                </div>
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
            </div>
        </form>
        <form action="" method="post">
    <div class="form-group input-group input-group-sm" >
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">TOTAL GROSS SALES MINGGU KEMARIN</label>
                </div>
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
            </div>
        </form>
        <form action="" method="post">
    <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">SELISIH DARI MINGGU KEMARIN</label>
                </div>
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
            </div>
        </form>
    </div>
    </div>
</div>