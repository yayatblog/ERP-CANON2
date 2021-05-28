<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Profile <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Profile <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
<div class="container">
        <div class="col-md-6">
            <h2 class="">Data Perusahaan</h2>
            	<form action="<?php echo base_url().'profil2/update'?>" method="post">
            <input type="hidden" name="id" class="form-control" value="<?php foreach ($profile as $usr): ?> <?php echo $usr['id'] ?> <?php endforeach; ?>">
            <div class="form-row">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" value="<?php foreach ($profile as $usr): ?> <?php echo $usr['nama'] ?> <?php endforeach; ?>"  name="nama">
                
            </div>

                <div class="form-row">
                <label for="inputAnak">Deskripsi</label>
                <input type="text" class="form-control" name="alamat" style="height: 100px;" value="<?php foreach ($profile as $usr): ?> <?php echo $usr['alamat'] ?> <?php endforeach; ?>">
                
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value="<?php foreach ($profile as $usr): ?> <?php echo $usr['email'] ?> <?php endforeach; ?>"  class="form-control">
                </div>
                
                
                
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                <a href="<?=base_url('profil2');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
        </div>
    </div>