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
<form action="<?php echo base_url().'penerimaan/edit'?>" method="post">
<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<div class="row mt-3">
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Supplier :</label>
                    </div>
					 <input type="hidden" name="id" value="<?= $penerimaan['id'];?>">
                    <input type="text" name="supplier" id="nama" value="<?= $penerimaan['supplier'];?>"  class="form-control form-control-sm" data-toggle="modal" data-target="#myModal">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">No. Sj Supplier :</label>
                    </div>
                    <input type="text" name="no_sj" value="<?= $penerimaan['no_sj'];?>" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Tgl. SJ Supplier :</label>
                    </div>
                    <input type="text" name="tanggal" value="<?= $penerimaan['tanggal'];?>"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
                
           
        </div>
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">No. LPB :</label>
                    </div>
                    <input type="text" name="no_lpb"  value="<?php echo $kode1; ?>" class="form-control form-control-sm" readonly>
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">No. PO :</label>
                    </div>
                    <input type="text" name="no_po" value="<?= $penerimaan['no_po'];?>"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">No. Kontainer :</label>
                    </div>
                    <input type="text" name="no_kontiner" value="<?= $penerimaan['no_kontiner'];?>"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
               
   
        </div>
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">No. Polisi :</label>
                    </div>
                    <input type="text" name="no_polisi" value="<?= $penerimaan['no_polisi'];?>"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">Nama Driver :</label>
                    </div>
                    <input type="text" name="nama_supir" value="<?= $penerimaan['nama_supir'];?>"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">No. Segel :</label>
                    </div>
                    <input type="text" name="no_segel" value="<?= $penerimaan['no_segel'];?>"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
              
        </div>
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
 

<br>
<div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

        <thead>
            <tr style="text-align:center;">
                <th>Kode</th>
                <th>Nama Barang</th>
				 <th>Gudang</th>
                <th>Jumlah Karton</th>
                <th>Isi Karton</th>
                <th>Total Qty</th>
                <th>Harga</th>
            </tr>
        </thead>
        
          
            <tr>
              
                <td style="text-align:center;">
                    <input type="text" name="kode_id" id="kode"  value="<?= $penerimaan['kode_id'];?>" class="form-control form-control-sm" data-toggle="modal" data-target="#myModal1">
                </td>
                <td>
                   <input type="text" name="nama"  id="namabrg" value="<?= $penerimaan['nama'];?>"  class="form-control form-control-sm">
                </td>
				<td style="text-align:center;">
                    <input type="text" id="gudang" name="gudang" value="<?= $penerimaan['gudang'];?>"  class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                   <input type="text" name="qty" id="txt1" onkeyup="sum();"  value="<?= $penerimaan['qty'];?>" class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                  <input type="text" name="isi_karton" id="txt2" onkeyup="sum();"  value="<?= $penerimaan['isi_karton'];?>"  class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                   <input type="text" name="total_qty" id="txt3" onkeyup="sum();"  value="<?= $penerimaan['total_qty'];?>"  class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                   <input type="text" name="harga"  value="<?= $penerimaan['harga'];?>"  class="form-control form-control-sm">
                </td>
            </tr>
            

        </tbody>
    </table>
        <div class="col-lg-4">
           
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Total Qty :</label>
                    </div>
                    <input type="text"  value="<?= $penerimaan['total_qty'];?>"  class="form-control form-control-sm">
                </div>
                
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Total Harga :</label>
                    </div>
                    <input type="text"  value="<?= $penerimaan['harga'];?>"  class="form-control form-control-sm">

                </div>
                
           
        </div>
       
       
</div>

 <button type="submit" class="btn btn-primary mb-2 mt-2">Edit</button>
 <a href="<?= base_url('penerimaan');?>" class="btn btn-success">Kembali</a>
 </form>
	
	<html>
	<head>
        <title>Pencarian data dengan lookup modal bootstrap</title>
		 <link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/bootstrap.css'?>"/>
        <link rel="stylesheet" href="<?php echo base_url().'datatables/dataTables.bootstrap.css'?>"/>
    </head>
<body>


	
        <!-- Modal -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel1"></h4>
                    </div>
                    <div class="modal-body table-responsive">
                        <table id="lookup1" style="width:750px" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                 <th>Kode</th>
								<th>Nama Barang</th>
                                </tr>
                            </thead>
                                <?php 
							$no = 1;				   
							foreach($data2->result_array() as $i):
								$kode=$i['kode'];
								$namabrg=$i['nama'];
								$gudang=$i['gudang'];
						     ?>
                                    <tr class="pilih1" data-kode="<?php echo $kode; ?>" data-nama="<?php echo $namabrg; ?>" data-gudang="<?php echo $gudang; ?>">
                                        <td><?php echo $kode; ?></td>
                                        <td><?php echo $namabrg; ?></td>
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
    $('#lookup1').DataTable()
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
            $(document).on('click', '.pilih1', function (e) {
                document.getElementById("kode").value = $(this).attr('data-kode');
                $('#myModal1').modal('hide');
				
				document.getElementById("namabrg").value = $(this).attr('data-nama');
                $('#myModal1').modal('hide');
				
				document.getElementById("gudang").value = $(this).attr('data-gudang');
                $('#myModal1').modal('hide');
				
            });
			

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var kode = document.getElementById("kode").value;
                alert('Kode ' + kode + ' berhasil tersimpan');
				
				var namabrg = document.getElementById("namabrg").value;
                alert('Nama ' + namabrg + ' berhasil tersimpan');
				
				var gudang = document.getElementById("gudang").value;
                alert('Gudang ' + gudang + ' berhasil tersimpan');
			
		
				
            }
        </script>


</body>
</html>
<script>
function sum() {
	
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
	 	  
	 
}

</script>    