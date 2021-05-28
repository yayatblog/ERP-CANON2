        <!-- Begin Page Content -->
        <div class="container-fluid">

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
       
          <div class="row">
          	<div class="col-lg-7">
          		<!-- Page Heading -->
          <div class="bg-primary" style="border-radius:5px;">
          <h1 class="h3 text-light center" style="text-align:center;">Silahkan Ubah Password Anda</h1>
          
            <?= $this->session->flashdata('message');?>
          	<form action="<?php echo base_url().'users2/update'?>" method="post">
			<input type="hidden" name="id" class="form-control" value="<?php foreach ($users as $usr): ?> <?php echo $usr['id'] ?> <?php endforeach; ?>">
			
              <div class="form-group mr-3">
                <label for="current_password" class="text-light ml-2">Current Password</label>
                <input type="password" class="form-control ml-2">
              </div>
               <div class="form-group mr-3">
                <label for="new_password1" class="text-light ml-2">New Password</label>
                <input type="password" class="form-control ml-2" name="password">
                <small><span class="text-danger"><?=form_error('password');?></span></small>
              </div>
              <div class="form-group mr-3">
               <label for="new_password2" class="text-light ml-2">Repeat Password</label>
                <input type="password" class="form-control ml-2">
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="btn btn-warning mb-2 ml-2">Change Password</button>
              </div>
            </form>
            </div>
          	</div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    
