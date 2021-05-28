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
<!-- <div class="btn-group"> -->
<div class="row mt-3">
        <div class="col-lg-4">
            <form action="" method="post">
            <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Cari ID :</label>
                    </div>
                    <input type="text" name="kode" id="kode" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="noinv" class="input-group-text">Cari Nama :</label>
                    </div>
                    <input type="text" name="barang" id="barang" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Cari HP :</label>
                    </div>
                    <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm">
                </div>
            </form>
        </div>
        <div class="col-lg-2">
        <form action="" method="post">
        <button type="submit" class="btn btn-primary">Show All </button>
        </form>
        </div>
        <div class="col-lg-4">
            <form action="" method="post">
                <div class="d-flex">
                <div class="input-group input-group-sm">
                    <!-- <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Manager :</label>
                    </div> -->
                    <!-- <input type="text" name="manager" id="manager" class="form-control form-control-sm"> -->
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
                    <!-- <input type="text" name="manager" id="manager" class="form-control form-control-sm"> -->
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
        <!-- <form action="" method="post">
        <button type="submit" class="btn btn-primary">Filter</button>
        </form> -->
        </div>
    </div>
    
<!-- <a href="<?= base_url('barang/laporan_pdf');?>" class="btn btn-danger mb-2">Export PDF</a> -->
<a href="<?= base_url('team2/tambah');?>" class="btn btn-primary mb-2 mt-2">Tambah Data</a>



<!-- </div> -->
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr >
                <th>No.</th>
                <th>ID</th>
                <th>Nama</th>
                <th>Tgl Lahir</th>
                <th>Jabatan</th>
                <th>Tahun Gabung</th>
                <th>Alamat</th>
                <th>Kota/Kecamatan</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        
            <?php
            $i=1;?>
            <?php
            foreach ($team as $erp): ?>
            <tr>
           
                <td width="">
                    <?php
                   echo $i;?>
                </td>
                <td>
                    <?php
                     echo $erp['kode_id'] ?>
                </td>
                <td width="">
                    <?php
                    echo $erp['nama'] ?>
                </td>
                <td>
                    <?php
                    echo $erp['tgl_lahir'] ?>
                </td>
                
				<td>
                    <?php 
                   echo $erp['jabatan'] ?>
                </td>
                <td>
                    <?php
                     echo $erp['thn_gabung'] ?>
                </td>
                <td class="">
                    <?php echo $erp['alamat']?>
                </td>
                <td class="">
                    <?php echo $erp['kota']?>
                </td>
                <td class="">
                    <?php echo $erp['no_telp']?>
                </td>
                <td class="">
                    <?php echo $erp['email']?>
                </td>
               
                <td>
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                   
                </div>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?> 

        </tbody>
    </table>
    <!-- Untuk Footer Bawah -->
    
    </div>
</div>