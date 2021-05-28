<!-- <style>
    label {
        color: white;
    }
</style> -->
<div class="container">
        <div class="col-md-6">
            <h2 class="">Form Edit Data</h2>
            <form action="<?php echo base_url().'users2/update'?>" method="post">
			<input type="hidden" name="id" class="form-control" value="<?= $user['id'];?>">
            <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username"  value="<?= $user['username'];?>" class="form-control">
                    <small><span class="text-danger"><?=form_error('username');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email"  value="<?= $user['email'];?>"  class="form-control">
                    <small><span class="text-danger"><?=form_error('email');?></span></small>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password"  value="<?= $user['password'];?>"  class="form-control">
					  <input type="hidden" name="kode_id"  value="<?= $user['kode_id'];?>"  class="form-control">
                     <input type="hidden" name="id_role"  value="<?= $user['id_role'];?>"  class="form-control">
					<small><span class="text-danger"><?=form_error('password');?></span></small>
                </div>
                
               
				
                <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
                <a href="<?=base_url('users2');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>