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
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Hutang <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Hutang <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="row mt-3">
        <div class="col-lg-3">
            <form action="" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Sales ID :</label>
                    </div>
                    <input type="text" name="kode" id="kode" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="noinv" class="input-group-text">Supplier :</label>
                    </div>
                    <input type="text" name="barang" id="barang" class="form-control form-control-sm">
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Keadaan :</label>
                    </div>
                    <input type="text" name="kode" id="kode" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="noinv" class="input-group-text">Type :</label>
                    </div>
                    <input type="text" name="barang" id="barang" class="form-control form-control-sm">
                </div>
               
            </form>
        </div>
       
        <div class="col-lg-2">
            <form action="" method="post">
                <div class="d-flex">
                <div class="input-group input-group-sm">
                    <!-- <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Manager :</label>
                    </div> -->
                    <input type="date" name="manager" id="manager" class="form-control form-control-sm">
                    <!-- <select name="asmen" id="manager" class="form-control form-control-sm">
                            <option value="">Pilihan #1</option>
                            <option value="">Pilihan #2</option>
                            <option value="">Pilihan #3</option>
                        </select> -->
                </div>
                    <!-- <div class="form-check form-check-inline">
                        <input type="checkbox" name="koreksi" id="koreksi" class="form-check-input">
                        <label class="form-check-label">Koreksi</label>
                    </div> -->
                </div>
                <div class="input-group input-group-sm">
                    <!-- <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Manager :</label>
                    </div> -->
                    <input type="date" name="manager" id="manager" class="form-control form-control-sm">
                    <!-- <select name="asmen" id="manager" class="form-control form-control-sm">
                            <option value="">Pilihan #1</option>
                            <option value="">Pilihan #2</option>
                            <option value="">Pilihan #3</option>
                        </select> -->
                </div>
                <!-- <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="id" class="input-group-text">ID :</label>
                    </div>
                    <input type="text" name="id" id="id" class="form-control form-control-sm">
                </div> -->
            </form>
        </div>
        <div class="col-lg-2">
            <form action="" method="post">
                <div class="d-flex">
                <div class="input-group input-group-sm">
                    
                    <a href="" class="btn btn-primary mb-2">Cari By Tanggal</a>

                </div>
                  
                </div>
                <div class="input-group input-group-sm">
               
                    <a href="" class="btn btn-primary">Seluruh Hutang</a>

                </div>
              
            </form>
        </div>
        <div class="col-lg-2">
            <form action="" method="post">
                <div class="d-flex">
                <div class="input-group input-group-sm">
                    
                    <a href="" class="btn btn-primary mb-2">Jatuh Tempo</a>

                </div>
                  
                </div>
                <div class="input-group input-group-sm">
               
                    <a href="" class="btn btn-primary">Hapus</a>

                </div>
              
            </form>
        </div>
        
    </div>

<a href="<?= base_url('hutang/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Tgl</th>
                <th>No. Referensi</th>
                <th>Jatuh Tempo</th>
                <th>Mata Uang</th>
                <th>Debit</th>
                <th>Kredit</th>
                <th>Saldo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($hutang as $hut): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $hut['tgl'] ?>
                </td>
                <td width="">
                    <?php echo $hut['no_referensi'] ?>
                </td>
                <td width="">
                    <?php echo $hut['jatuh_tempo'] ?>
                </td>
                <td width="">
                    <?php echo $hut['mata_uang'] ?>
                </td>
                <td width="">
                    <?php echo $hut['debit'] ?>
                </td>
                <td width="">
                    <?php echo $hut['kredit'] ?>
                </td>
                <td width="">
                    <?php echo $hut['saldo'] ?>
                </td>
                <td style="text-align:center">
                
                <!-- <div class="btn-group" > -->
                    <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu"> -->
                    <a href="<?php echo base_url();?>hutang/edit/<?= $hut['id'];?>" class="btn btn-success" style=""><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>hutang/hapus/<?= $hut['id'];?>" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
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