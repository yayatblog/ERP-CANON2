<div class="content-wrapper col-11">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<h2>
    Menu Data Karyawan
    <div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data Karyawan..." class="form-control" autocomplete="off">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </div>
        </form>
    </div>
</div>
</h2>

  

</ol>
<div>

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Karyawan <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Karyawan <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<a href="<?= base_url('karyawan/tambah');?>" class="btn btn-info">Tambah Data</a>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
<tr>
    <td>No</td>
    <td class="center">Nama</td>
    <td class="center">TTL</td>
    <td class="center">Jabatan</td>
    <td class="center">Alamat</td>
    <td class="center">Lama Bekerja</td>
    <td style="text-align:center;">Aksi</td>            
</tr>
</thead>
<tbody>
<tr>
    <?php $i=1;?>
    <?php foreach ($erpcanon as $erp) :?>
    <td><?=$i;?></td>
    <td><?=$erp['nama'];?></td>    
    <td><?=$erp['kode'];?></td>    
    <td><?=$erp['name'];?></td>
    <td><?=$erp['hargajual'];?></td>        
	<td><?=$erp['hargabeli'];?></td>
    <td><?=$erp['detail'];?></td> 
    <td><?=$erp['image'];?></td>  
    <td>
        <a href="<?=base_url();?>karyawan/detail/<?=$erp['id'];?>" class="btn btn-success"><i class="fas fa-info"></i></a>
        <a href="<?=base_url();?>karyawan/hapus/<?=$erp['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus');"><i class="fas fa-trash"></i></a>
        <a href="<?=base_url();?>karyawan/edit/<?=$erp['id'];?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
    </td>
</tr>
<?php $i++;?>
    <?php endforeach;?>
</tbody>
</table>
    </div>
</div>