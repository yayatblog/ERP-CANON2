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
                                 <th>Kode</th>
								<th>Nama Mitra</th>
								<th>Jabatan</th>
								<th>Promoter</th>
								<th>Gudang</th>
								<th>Alamat</th>
                                </tr>
                            </thead>
                                <?php 
							$no = 1;				   
							foreach($data->result_array() as $i):
								$kode_id=$i['kode_id'];
								$nama=$i['nama'];
								$kota=$i['kota'];
								$telepon=$i['telepon'];
								$tgl_lahir=date('d/m/Y');
								$jabatan=$i['jabatan'];
								$promoter=$i['promoter'];
								$gudang=$i['gudang'];
								$alamat=$i['alamat'];
					
						?>
                                    <tr class="pilih" data-kota="<?php echo $kota; ?>" data-nama="<?php echo $nama; ?>" data-alamat="<?php echo $alamat; ?>" data-telepon="<?php echo $telepon; ?>" data-tgl_lahir="<?php echo $tgl_lahir; ?>" data-id="<?php echo $kode ?>">
                                        <td><?php echo $kode_id; ?></td>
                                        <td><?php echo $nama; ?></td>
										<td><?php echo $jabatan; ?></td>
										<td><?php echo $promoter; ?></td>
										<td><?php echo $gudang; ?></td>
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
				document.getElementById("kota").value = $(this).attr('data-kota');
                $('#myModal').modal('hide');
				document.getElementById("alamat").value = $(this).attr('data-alamat');
                $('#myModal').modal('hide');
				document.getElementById("telepon").value = $(this).attr('data-telepon');
                $('#myModal').modal('hide');
				document.getElementById("tgl_lahir").value = $(this).attr('data-tgl_lahir');
                $('#myModal').modal('hide');
				document.getElementById("id").value = $(this).attr('data-id');
                $('#myModal').modal('hide');
            });
			

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var nama = document.getElementById("nama").value;
                alert('Nama ' + nama + ' berhasil tersimpan');
				
				var kota = document.getElementById("kota").value;
                alert('Kota ' + kota + ' berhasil tersimpan');
				
				var alamat = document.getElementById("alamat").value;
                alert('Alamat ' + alamat + ' berhasil tersimpan');
				
				var telepon = document.getElementById("telepon").value;
                alert('Telepon ' + kota + ' berhasil tersimpan');
				
				var tgl_lahir = document.getElementById("tgl_lahir").value;
                alert('Tanggal Lahir ' + tgl_lahir + ' berhasil tersimpan');
				
				var id = document.getElementById("$id").value;
                alert('No DO ' + id + ' berhasil tersimpan');
            }
        </script>


</body>
</html>

<form action="<?php echo base_url().'pengiriman/update'?>" method="post">
<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<div class="row mt-3">
        <div class="col-lg-4">
            
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Kepada :</label>
                    </div>
					 <input type="hidden" name="id" value="<?= $pengiriman['id'];?>">
                    <input type="text" name="kepada" id="nama" value="<?= $pengiriman['kepada'];?>" class="form-control form-control-sm" data-toggle="modal" data-target="#myModal">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="alamat"  class="input-group-text">Alamat :</label>
                    </div>
                    <input type="text" name="alamat"  value="<?= $pengiriman['alamat'];?>" id="alamat" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Kota/Kec :</label>
                    </div>
                    <input type="text" name="kota" id="kota" value="<?= $pengiriman['kota'];?>" class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="security" class="input-group-text">No. Telepon :</label>
                    </div>
                    <input type="text" name="no_telepon" value="<?= $pengiriman['no_telepon'];?>" id="telepon" class="form-control form-control-sm">
                    <!-- <input type="text" name="security" id="security" class="form-control form-control-sm"> -->
                </div>

        </div>
        <!-- <div class="col-lg-2">
        <form action="" method="post">
        <button type="submit" class="btn btn-primary">Show All </button>
        </form>
        </div> -->
        <div class="col-lg-6">
                <div class="d-flex">
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="taggal" class="input-group-text">Tanggal :</label>
                    </div>
                    <input type="text" name="tanggal" value="<?= $pengiriman['tanggal'];?>" id="tgl_lahir" class="form-control form-control-sm">
                </div>
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="no_do" class="input-group-text">No. DO :</label>
                    </div>
                    <input type="text" name="no_do" id="id" value="<?= $pengiriman['no_do'];?>" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="manager_gudang" class="input-group-text">Manager Gudang :</label>
                    </div>
                    <input type="text" name="manager_gudang" value="<?= $pengiriman['manager_gudang'];?>" id="manager_gudang" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="no_kontainer" class="input-group-text">No. Kontainer :</label>
                    </div>
                    <input type="text" name="no_kontainer" id="no_kontainer" value="<?= $pengiriman['no_kontainer'];?>" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="no_segel" class="input-group-text">No. Segel :</label>
                    </div>
                    <input type="text" name="no_segel" id="no_segel" value="<?= $pengiriman['no_segel'];?>" class="form-control form-control-sm">
                </div>
                </div>   
        </div>

  

</ol>
<div style="margin-left:5px">

<div class="">
<?php if($this->session->flashdata('flash2')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">Data Pengiriman <strong>berhasil </strong><?= $this->session->flashdata('flash2');?>
        <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
    </div>    
</div>
<?php endif;?>

<?php if($this->session->flashdata('flash')) :?>
<div class="row mt-3">
    <div class="col md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">Data Pengiriman <strong>berhasil </strong><?= $this->session->flashdata('flash');?>
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
				<th>Gudang Asal</th>
                <th>Jumlah Karton</th>
                <th>Isi Karton</th>
                <th>Total Qty</th>
				 <th>Stok</th>
				  <th>Gudang Tujuan</th>
            </tr>
        </thead>
		 
           
            <tr>
                
                <td style="text-align:center;">
                   <input type="text" class="form-control" value="<?= $pengiriman['kode_id'];?>" id="kode" name="kode_id" data-toggle="modal" data-target="#myModal1" required>
                </td>
                <td>
                  <input type="text" class="form-control" id="namabrg" value="<?= $pengiriman['nama'];?>" name="nama" required>
                </td>
				
				<td>
                  <input type="text" class="form-control" id="gudang" value="<?= $pengiriman['gudang_asal'];?>" name="gudang_asal" required>
                </td>
                <td style="text-align:center;">
                    <input type="text" class="form-control" id="qty_karton" value="<?= $pengiriman['qty_karton'];?>" name="qty_karton" required>
                </td>
                <td style="text-align:center;">
                   <input type="text" class="form-control" id="qty_perkarton" value="<?= $pengiriman['qty_perkarton'];?>" name="qty_perkarton" required>
                </td>
                <td style="text-align:center;">
                     <input type="text" class="form-control" id="total" value="<?= $pengiriman['total'];?>" name="total" required>
                </td>
				
				 <td style="text-align:center;">
                     <input type="text" class="form-control" id="qty" value="<?= $pengiriman['stok'];?>" name="stok" required>
                </td>
				
				 <td style="text-align:center;">
                     <input type="text" class="form-control" id="gudang1" value="<?= $pengiriman['gudang_tujuan'];?>" name="gudang_tujuan" required>
                </td>
               
            </tr>
    </table>
	<script type="text/javascript"> 
    $(document).ready(function() {
        $("#qty_karton, #qty_perkarton").keyup(function() {
            var qty_karton  = $("#qty_karton").val();
            var qty_perkarton = $("#qty_perkarton").val();
            
			
			 var total = parseInt(qty_karton) * parseInt(qty_perkarton);
             if (!isNaN(total)) {
             $("#total").val(total);
             }
			
        });
    });
</script>
    </div>
    <!-- Footer Pengiriman -->
    <div class="row mt-3">
        <div class="col-lg-4">
            
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Nama Expedisi :</label>
                    </div>
                    <input type="text" name="name"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="ongkir" class="input-group-text">Ongkir/Kg :</label>
                    </div>
                    <input type="text" name="ongkir"  class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="jenis_kendaraan" class="input-group-text">Jenis Kendaraan :</label>
                    </div>
                    <input type="text" name="jenis_kendaraan"  class="form-control form-control-sm">
                    <!-- <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm"> -->
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="security" class="input-group-text">No. Polisi :</label>
                    </div>
                    <input type="text" name="no_polisi"  class="form-control form-control-sm">
                    <!-- <input type="text" name="security" id="security" class="form-control form-control-sm"> -->
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="driver" class="input-group-text">Nama Driver :</label>
                    </div>
                    <input type="text" name="driver"  class="form-control form-control-sm">
                    <!-- <input type="text" name="security" id="security" class="form-control form-control-sm"> -->
                </div>
          
        </div>
        <div class="col-lg-6">
            
                <div class="d-flex">
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="taggal" class="input-group-text">Total QTY :</label>
                    </div>
                    <input type="text" name="total_qty"  class="form-control form-control-sm">
                </div>
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="no_do" class="input-group-text">Total Ongkir :</label>
                    </div>
                    <input type="text" name="total_ongkir" class="form-control form-control-sm">
                </div>
                <div class="input-group input-group-sm mt-1">
                <div class="input-group-prepend">
                        <label for="pembayaran" class="input-group-text">Pembayaran :</label>
                    </div>
                        <select name=""  class="form-control">
                            <option value="">JNE</option>
                            <option value="">JNt</option>
                            <option value="">Si Cepat</option>

                        </select>
                </div>
                 
           
        </div>
</div>
<br>
  <button type="submit" class="btn btn-primary mb-2 mt-2">Edit</button>
 <a href="<?= base_url('pengiriman');?>" class="btn btn-success">Kembali</a>
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
								$gudang1=$i['gudang'];
								$qty=$i['qty'];
						     ?>
                                    <tr class="pilih1" data-kode="<?php echo $kode; ?>" data-nama="<?php echo $namabrg; ?>" data-gudang="<?php echo $gudang; ?>" data-gudang1="<?php echo $gudang1; ?>" data-qty="<?php echo $qty; ?>">
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
				
				document.getElementById("gudang1").value = $(this).attr('data-gudang1');
                $('#myModal1').modal('hide');
				
				document.getElementById("qty").value = $(this).attr('data-qty');
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
				
				var gudang1 = document.getElementById("gudang1").value;
                alert('Gudang ' + gudang1 + ' berhasil tersimpan');
				
				var qty = document.getElementById("qty").value;
                alert('QTY ' + qty + ' berhasil tersimpan');
			
			
		
				
            }
        </script>


</body>
</html>