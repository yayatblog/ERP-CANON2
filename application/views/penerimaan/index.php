<html>
	<head>
        <title>Pencarian data dengan lookup modal bootstrap</title>
		 <link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/bootstrap.css'?>"/>
        <link rel="stylesheet" href="<?php echo base_url().'datatables/dataTables.bootstrap.css'?>"/>
    </head>
<body>


	
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body table-responsive">
                        <table id="lookup" style="width:750px" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                 <th>Nama Supplier</th>
								<th>Alamat</th>
                                </tr>
                            </thead>
                                <?php 
							$no = 1;				   
							foreach($data->result_array() as $i):
								$nama=$i['nama'];
								$alamat=$i['alamat'];
						     ?>
                                    <tr class="pilih" data-nama="<?php echo $nama; ?>" data-alamat="<?php echo $alamat; ?>">
                                        <td><?php echo $nama; ?></td>
                                        <td><?php echo $alamat; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                           
                        </table>  
                    </div>
                </div>
            </div>
        </div>
		<script src="<?php echo base_url().'js/jquery-1.11.2.min.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'bootstrap/js/bootstrap.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'datatables/jquery.dataTables.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'datatables/dataTables.bootstrap.js'?>" type="text/javascript"></script>
		<script>
  $(function () {
    $('#lookup').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
        <script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("nama").value = $(this).attr('data-nama');
                $('#myModal').modal('hide');
				document.getElementById("alamat").value = $(this).attr('data-alamat');
                $('#myModal').modal('hide');
            });
			

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var nama = document.getElementById("nama").value;
                alert('Nama ' + nama + ' berhasil tersimpan');
			
				
				var alamat = document.getElementById("alamat").value;
                alert('Alamat ' + alamat + ' berhasil tersimpan');
				
            }
        </script>


</body>
</html>
<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<div class="row mt-3">
        <div class="col-4">
            <form action="" method="post">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Supplier :</label>
                    </div>
                    <input type="text" name="supplier" id="nama"  class="form-control form-control-sm" data-toggle="modal" data-target="#myModal">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">No. Sj Supplier :</label>
                    </div>
                    <input type="text" name="no_sj" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Tgl. SJ Supplier :</label>
                    </div>
                    <input type="text" name="tanggal" value="<?php echo date('d/m/Y'); ?>"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
                
           
        </div>
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">No. LPB :</label>
                    </div>
                    <input type="text" name="no_lpb"  value="<?php echo $kode1; ?>" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">No. PO :</label>
                    </div>
                    <input type="text" name="no_po"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">No. Kontainer :</label>
                    </div>
                    <input type="text" name="no_kontiner"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
               
   
        </div>
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">No. Polisi :</label>
                    </div>
                    <input type="text" name="no_polisi"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">Nama Driver :</label>
                    </div>
                    <input type="text" name="nama_supir"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">No. Segel :</label>
                    </div>
                    <input type="text" name="no_segel"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
              
        </div>
	
 </form>
           
        </div>

  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Penerimaan <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Penerimaan <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>
 
 	<a href="<?php echo base_url('penerimaan/tambah'); ?>" class="btn btn-primary mb-2 mt-2">Tambah Data</a>
 
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
            <tr style="text-align:center;">
                <th style="text-align:center;">No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Qty Karton</th>
                <th>Satuan Karton</th>
                <th>Total Qty</th>
                <th>Harga</th>
                <th>Total</th>
                <th style="text-align:center;">Aksi</th>
            </tr>
        </thead>
        
             <?php 
				$no = 1;				   
				foreach($data1->result_array() as $i):
				    $id=$i['id'];
					$kode_id=$i['kode_id'];
					$nama=$i['nama'];
					$qty=$i['qty'];
					$isi_karton=$i['isi_karton'];
					$total_qty=$i['total_qty'];
					$harga=$i['harga'];
					$total=$i['total_qty']*$i['harga'];
	           ?>
            <tr>
                <td style="text-align:center;">
                   <?php echo $no++ ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $kode_id ?>
                </td>
                <td>
                    <?php echo $nama ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $qty ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $isi_karton ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $total_qty ?>
                </td>
                <td style="text-align:center;">
                    <?php echo $harga?>
                </td>
                <td style="text-align:center;">
                    <?php echo $total?>
                </td>
                <td style="text-align:center;">
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                   <a href="<?= base_url();?>penerimaan/edit/<?= $id;?>"  class="btn btn-success mt-2" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>penerimaan/hapus/<?= $id;?>" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                </div>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach; ?>

        </tbody>
    </table>
        <div class="col-lg-4">

			 <?php 
          $no = 1;				 
         foreach($data3->result_array() as $i):
		  $sum_total_qty=$i['sum_total_qty'];
		  ?>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Total Qty :</label>
                    </div>
                    <input type="text" value="<?php echo $sum_total_qty ?>" class="form-control form-control-sm">
                </div>
				  <?php $i++;?>
				<?php endforeach; ?>
				 <?php 	
          $no = 1;					 
         foreach($data4->result_array() as $i):
		  $sum_total_harga=$i['sum_total_harga'];
		  ?>
                
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Total Harga :</label>
                    </div>
                    <input type="text" value="<?php echo $sum_total_harga ?>" class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
				  <?php $i++;?>
				<?php endforeach; ?>
                
            
        </div>
        
</div>


	
	   