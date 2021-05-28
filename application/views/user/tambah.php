<!-- <style>
    label {
        color: white;
    }
</style> -->
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
                    <small><span class="text-danger"><?=form_error('password');?></span></small>
                </div>
				
				 <div class="form-group">
                    <label for="">Kode Id</label>
                    <input type="text" name="kode_id" placeholder="Masukkan Kode Id" class="form-control">
                    <small><span class="text-danger"><?=form_error('kode_id');?></span></small>
                </div>

                <div class="form-group">
                    <label for="">Role Id</label>
                    <input type="text" name="id_role" placeholder="Masukkan Role Id" class="form-control">
                    <small><span class="text-danger"><?=form_error('id_role');?></span></small>
                </div>
                
                
                <button type="submit" class="btn btn-primary mb-2">Tambah Data</button>
                <a href="<?=base_url('users');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>