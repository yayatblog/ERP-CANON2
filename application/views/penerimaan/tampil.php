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
$tanggal=$i['tanggal'];
$no_lpb=$i['no_lpb'];
$no_sj=$i['no_sj'];
$qty=$i['qty'];
$no_po=$i['no_po'];
$no_kontiner=$i['no_kontiner'];
$no_polisi=$i['no_polisi'];
$nama_supir=$i['nama_supir'];
$no_segel=$i['no_segel'];
$gudang=$i['gudang'];
$supplier=$i['supplier'];
?>
<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<div class="row mt-3">
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Supplier :</label>
                    </div>
                    <input type="text" name="supplier" id="nama" value="<?php echo $supplier ?>"  class="form-control form-control-sm" data-toggle="modal" data-target="#myModal">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">No. Sj Supplier :</label>
                    </div>
                    <input type="text" name="no_sj" value="<?php echo $no_sj ?>" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Tgl. SJ Supplier :</label>
                    </div>
                    <input type="text" name="tanggal" value="<?php echo $tanggal ?>"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
                
           
        </div>
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">No. LPB :</label>
                    </div>
                    <input type="text" name="no_lpb"  value="<?php echo $no_lpb ?>" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">No. PO :</label>
                    </div>
                    <input type="text" name="no_po" value="<?php echo $no_po ?>"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">No. Kontainer :</label>
                    </div>
                    <input type="text" name="no_kontiner" value="<?php echo $no_kontiner ?>"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
               
   
        </div>
        <div class="col-4">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">No. Polisi :</label>
                    </div>
                    <input type="text" name="no_polisi" value="<?php echo $no_polisi ?>"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat" class="input-group-text">Nama Driver :</label>
                    </div>
                    <input type="text" name="nama_supir" value="<?php echo $nama_supir ?>"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">No. Segel :</label>
                    </div>
                    <input type="text" name="no_segel" value="<?php echo $no_segel ?>"  class="form-control form-control-sm">
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
                    <input type="text" name="kode_id" id="kode"  value="<?php echo $kode_id ?>" class="form-control form-control-sm" data-toggle="modal" data-target="#myModal1">
                </td>
                <td>
                   <input type="text" name="nama"  id="namabrg" value="<?php echo $nama ?>"  class="form-control form-control-sm">
                </td>
				<td style="text-align:center;">
                    <input type="text" id="gudang" name="gudang" value="<?php echo $gudang ?>"  class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                   <input type="text" name="qty" id="txt1" onkeyup="sum();"  value="<?php echo $qty ?>" class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                  <input type="text" name="isi_karton" id="txt2" onkeyup="sum();"  value="<?php echo $isi_karton ?>"  class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                   <input type="text" name="total_qty" id="txt3" onkeyup="sum();"  value="<?php echo $total_qty ?>"  class="form-control form-control-sm">
                </td>
                <td style="text-align:center;">
                   <input type="text" name="harga"  value="<?php echo $harga ?>"  class="form-control form-control-sm">
                </td>
            </tr>
            

        </tbody>
    </table>
        <div class="col-lg-4">
           
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Total Qty :</label>
                    </div>
                    <input type="text"  value="<?php echo $total_qty ?>"  class="form-control form-control-sm">
                </div>
                
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Total Harga :</label>
                    </div>
                    <input type="text"  value="<?php echo $harga ?>"  class="form-control form-control-sm">

                </div>
                
           
        </div>
       
       
</div>
<br>
 <a href="<?= base_url('penerimaan');?>" class="btn btn-success">Kembali</a>
 <a data-toggle="modal" data-target="#modal_add_new" class="btn btn-info"><font color="white">Proses</font></a>

 
   <?php $i++;?>
 <?php endforeach; ?>
 
 <!-- ============ MODAL ADD Kategori =============== -->
   <div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
              <section class="content">
			<div class="row">
			  <div class="col-md-10">
			  <div class="box-header with-border">
              <h4 class="box-title">Cash</h4>
            </div>
            <form role="form" method="post" action="<?= base_url('penerimaan/tambah_aksi');?>">
              <div class="box-body">
			  
			  <div class="input-group input-group-sm">
                
                <select class="form-control"  name="id_akun_pembayaran"required>
				<option  value="">Pilih Akun Pembayaran</option>                    
				<?php foreach($get_category as $row) { ?>
				<option value="<?php echo $row->id_akun_pembayaran;?>"><?php echo $row->akun_pembayaran;?></option>
				<?php } ?>
				</select>
					<div class="input-group-append">
                    <a data-toggle="modal" data-target="#modal_akun_new" class="btn btn-info btn-sm"><font color="white">Tambah Akun</font></a>
                </div>
                </div>
			  
              
				<br>
				<div class="form-group">
                  <label for="exampleInputEmail1">Total Pembelian</label>
                  <input type="text"  name="total_pembelian" id="total_pembelian"  value="<?php echo $harga ?>" class="form-control">
                </div>
				
				 <div class="form-row">  
				
				<div class="form-group col-md-3">
                  <label for="exampleInputEmail1">Discount</label>
                  <input type="text"  name="diskon"  id="diskon"   class="form-control">
                </div>
				
					
				<div class="form-group col-md-8">
                  <label for="exampleInputEmail1">Harga Discount </label>
                  <input type="text" name="bayar_diskon"  id="bayar1"   class="form-control">
                </div>
				
				</div>
				
				
				 <div class="form-row"> 
				
				<div class="form-group col-md-3">
                  <label for="exampleInputEmail1">PPN</label>
                  <input type="text" id="ppn"  name="ppn"  class="form-control">
                </div>
			
				
				<div class="form-group col-md-8">
                  <label for="exampleInputEmail1">Harga PPN</label>
                  <input type="text"  name="bayar_ppn"  id="bayar"  class="form-control">
                </div>
				
				</div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Total</label>
                  <input type="text" name="total_bayar"  id="total" class="form-control">
				  <input type="hidden" name="tanggal" value="<?php echo date ('m/d/Y'); ?>">
                </div>
				
                
 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
               <button type="submit" class="btn btn-info mb-2 mt-2">Proses</button>
				 <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
           </form>
			</div>
			</div>
			</section>
              </div>
    
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
     <script type="text/javascript"> 
    $(document).ready(function() {
        $("#total_pembelian, #ppn, #diskon").keyup(function() {
            var total_pembelian  = $("#total_pembelian").val();
            var ppn = $("#ppn").val();
			var diskon = $("#diskon").val();
            
			 var bayar1 =parseInt(total_pembelian)- parseInt(diskon)  /100 * parseInt(total_pembelian);
			 if (!isNaN(bayar1)) {
             $("#bayar1").val(bayar1);
             }

			 
            var bayar = parseInt(ppn) * parseInt(total_pembelian)/100 + parseInt(total_pembelian);
			if (!isNaN(bayar)) {
             $("#bayar").val(bayar);
             }
			
			 var total = parseInt(diskon)  /100 * parseInt(total_pembelian) + parseInt(total_pembelian) +  parseInt(ppn) * parseInt(total_pembelian)/100 + parseInt(total_pembelian)+0;
             if (!isNaN(total)) {
             $("#total").val(total);
             }
			
        });
    });
</script>
    <!--END MODAL ADD BARANG-->
    
	
	<!-- ============ MODAL ADD Kategori =============== -->
   <div class="modal fade" id="modal_akun_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
              <section class="content">
			<div class="row">
			  <div class="col-md-10">
			  <div class="box-header with-border">
              <h4 class="box-title">View Akun Pembayaran</h4>
            </div>
            
			              <div class="card-body">
                               <table id="lookup3" style="width:750px" class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Akun Pembayaran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <?php 
				$no = 1;				   
				foreach($data3->result_array() as $i):  	 	 			 	
					$id_akun_pembayaran=$i['id_akun_pembayaran'];
					$akun_pembayaran=$i['akun_pembayaran'];

			?>
			
                                    
              <tr>
                 <td><?php echo $no++ ?></td>
				<td><?php echo $akun_pembayaran;?></td>
                <td>
              
				  <a style="margin-center:15px" href="<?=base_url('penerimaan/hapus_akun/'.$id_akun_pembayaran)?>" onclick="return konfirmasi()" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                 
                </td>
			</tr>
			<?php endforeach;?>
           </table>
		   <br>
		    <div class="box-header with-border">
              <h5 class="box-title">Form Akun Pembayaran</h5>
            </div>
		    <form role="form" method="post" action="<?php echo base_url().'penerimaan/tambah_aksi_akun'?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Akun Pembayaran</label>
                  <input type="text" name="akun_pembayaran" maxlength="50" class="form-control" placeholder="Akun Pembayaran" required>
                </div>
				
		
                
 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-info">Save</button>
				<button type="reset" class="btn btn-success">Reset</button>
              </div>
            </form>
		   
           </div>
			</div>
			</div>
			</section>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <script>
  $(function () {
    $('#lookup3').DataTable()
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
    <!--END MODAL ADD BARANG-->

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
