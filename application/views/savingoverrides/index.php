<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Saving Overrides <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Saving Overrides <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="col-lg-4">
            <form action="" method="post">
                <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Weekending :</label>
                    </div>
                    <select name="asmen" id="manager" class="form-control form-control-sm">
                            <option value=""></option>
                            <option value="">Weekending Up</option>
                            
                        </select>
                </div>
                   
            </form>
            <form action="" method="post">
                <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Jabatan :</label>
                    </div>
                    <select name="asmen" id="manager" class="form-control form-control-sm">
                            <option value=""></option>
                            <option value="">Branch Manager</option>
                            <option value="">Asistant Manager</option>
                            <option value="">Win-Win Manager</option>
                        </select>
                </div>
                   
            </form>
            <form action="" method="post">
                <div class="input-group input-group-sm mb-2">
                    <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Organization :</label>
                    </div>
                    <select name="asmen" id="manager" class="form-control form-control-sm">
                            <option value=""></option>
                            <option value="">SHOW ALL</option>
                        </select>
                </div>
                   
            </form>
        </div>
<a href="<?= base_url('saving_overrides/tambah');?>" class="btn btn-info mb-2">Tambah Data</a>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="" style="font-size: small;">

        <thead>
            <tr style="text-align:center">
                <th>No.</th>
                <th>Nama</th>
                <th>Kantor</th>
                <th>Summary</th>
                <th>Saldo Awal</th>
                <th>Masuk</th>
                <th>Keluar</th>
                <th>Total</th>
                <th>Total Saving</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach ($overrides as $ove): ?>
            <tr>
                <td style="text-align:center">
                    <?php echo $i;?>
                </td>
                <td>
                    <?php echo $ove['nama'] ?>
                </td>
                <td width="">
                    <?php echo $ove['kantor'] ?>
                </td>
                <td width="">
                    <?php echo $ove['summary'] ?>
                </td>
                <td width="">
                    <?php echo $ove['saldo_awal'] ?>
                </td>
                <td>
                    <?php echo $ove['masuk'] ?>
                </td>
                <td>
                    <?php echo $ove['keluar'] ?>
                </td>
                <td>
                    <?php echo $ove['total'] ?>
                </td>
                <td>
                    <?php echo $ove['total_saving'] ?>
                </td>
                <td style="text-align:center">
                
                <!-- <div class="btn-group" > -->
                    <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu"> -->
                    <a href="<?php echo base_url();?>saving_overrides/edit/<?= $ove['id'];?>" class="btn btn-success" style=""><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>saving_overrides/hapus/<?= $ove['id'];?>" class="btn btn-danger " style="" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    <!-- </div> -->
                <!-- </div> -->
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
    <!-- Footer -->
    
    <div class="col-lg-12">
    <form action="" method="post">
    <div class="form-group input-group input-group-sm" >
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Total Saving</label>
                </div>
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">


            </div>
        </form>
        <form action="" method="post">
    <div class="form-group input-group input-group-sm">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="weekending">Total Overrides</label>
                </div>
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
                <input type="text" name="" id="" class="form-control mr-2 ml-2">
            </div>
        </form>
    </div>
    
    
    </div>
</div>