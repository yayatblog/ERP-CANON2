<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">



  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data User <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data User <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="container">
<div class="row mt-3 mb-2">
    <div class="col-lg-6">
        <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="exampleCheck" class="input-group-text">KARYAWAN</label>
                </div>
                <input type="checkbox" class="form-check-input" id="exampleCheck">
            </div>
            <div class="input-group input-group-sm mt-1 mb-1">
            <div class="input-group-prepend">
                    <label for="exampleCheck" class="input-group-text">JABATAN</label>
                </div>
            <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value="">Branch Manager</option>
                    <option value="">Asistat Manager</option>
                    <option value="">Win2 Manager</option>
                </select>
           </div>
        </form>
       
    </div>
    <div class="col-lg-6">
    <form action="" method="post">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <label for="exampleCheck" class="input-group-text">MITRA</label>
                </div>
                <input type="checkbox" class="form-check-input" id="exampleCheck">
            </div>
            <div class="input-group input-group-sm mt-1 mb-1">
            <div class="input-group-prepend">
                    <label for="exampleCheck" class="input-group-text">MENU</label>
                </div>
            <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value="">Master Barang</option>
                    <option value="">Master Kategori</option>
                    <option value="">Master Gudang</option>
                    <option value="">Master Rak</option>
                    <option value="">Master Karyawan</option>
                    <option value="">Master Supplier</option>
                    <option value="">Master Mitra</option>
                    <option value="">Master Perusahaan</option>

                </select>
           </div>
        </form>
            </div>
            
    </div>
<a href="<?= base_url('users/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Role Id</th>
                <th>Nama</th>
                <th>Keterangan</th>
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($tbl_role as $usr): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td style="text-align:center">
                    <?php echo $usr['id'] ?>
                </td>
                <td width="">
                    <?php echo $usr['name'] ?>
                </td>
                <td width="">
                    <?php echo $usr['description'] ?>
                </td>
                <!-- <td style="text-align:center"> -->
                
                <!-- <div class="btn-group" > -->
                    <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu"> -->
                    <!-- <a href="<?php echo base_url();?>users/edit/<?= $usr['id'];?>" class="btn btn-success" style=""><i class="fa fa-edit"></i>Edit</i></a> -->
                    <!-- <a href="<?= base_url();?>users/hapus/<?= $usr['id'];?>" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a> -->
                    <!-- </div> -->
                <!-- </div> -->
                <!-- </td> -->
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
    </div>
</div>