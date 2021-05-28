<!-- <style>
    label {
        color: white;
    }
</style> -->
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
        <div class="col-md-6">
            <h2 class="">Form Tambah Data</h2>
            <form action="" class="form-horizontal" method="POST">
            <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" placeholder="Masukkan Username" class="form-control">
                    <small><span class="text-danger"><?=form_error('username');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email" class="form-control">
                    <small><span class="text-danger"><?=form_error('email');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Masukkan Password" class="form-control">
					  <input type="hidden" name="kode_id" value="<?php foreach ($users as $daf): ?><?php echo $daf['kode_id'] ?><?php endforeach; ?>" class="form-control">
                     <input type="hidden" name="id_role" value="<?php foreach ($users as $daf): ?><?php echo $daf['id_role'] ?><?php endforeach; ?>" class="form-control">
					<small><span class="text-danger"><?=form_error('password');?></span></small>
                </div>
                
               
				
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('users2');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>