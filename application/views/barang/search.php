<html>
	<head>
        <title>Pencarian data dengan lookup modal bootstrap</title>
		 <link rel="stylesheet" href="<?php echo base_url().'bootstrap/css/bootstrap.css'?>"/>
        <link rel="stylesheet" href="<?php echo base_url().'datatables/dataTables.bootstrap.css'?>"/>
    </head>
<body>
	
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="modal-body table-responsive">
                        <table id="lookup" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                 <th>Kode Barang</th>
								<th>Nama Barang</th>
								<th>Kategori</th>
								<th>Manager</th>
								<th>Gudang</th>
								<th>QTY</th>
								<th>Unit Bagus</th>
								<th>Unit Rusak</th>
								<th>HPP</th>
								<th>Harga Sebelum Pajak</th>
								<th>PPN</th>
								<th>Harga Setelah Pajak</th>
								<th>Harga Setoran</th>
								<th>Jumlah Modal</th>
                                </tr>
                            </thead>
                           
                                <?php 
				$no = 1;				   
				foreach($data->result_array() as $i):
					$id=$i['id'];
					$kode=$i['kode'];
					$nama=$i['nama'];
					$kategori=$i['kategori'];
					$gudang=$i['gudang'];
					$manager=$i['manager'];
					$gudang=$i['gudang'];
					$qty=$i['qty'];
					$unitbagus=$i['unitbagus'];
					$unitrusak=$i['unitrusak'];
					$hpp=$i['hpp'];
					$sebelumpajak=$i['sebelumpajak'];
				   $ppn=$i['ppn'];
					$setelahpajak=$i['setelahpajak'];
					$hargasetoran=$i['hargasetoran'];
					$jumlah=$i['jumlah'];
			?>
                   <tr class="pilih" data-nama="<?php echo $nama; ?>" data-kode="<?php echo $kode; ?>">
     
                </td>
                <td>
                    <?php echo $kode ?>
                </td>
                <td width="">
                    <?php echo $nama ?>
                </td>
                <td>
                    <?php echo $kategori ?>
                </td>
                <td>
                    <?php echo $manager ?>
                </td>
                <td>
                    <?php echo $gudang ?>
                </td>
                <td class="">
                    <?php echo $qty?>
                </td>
                <td class="">
                    <?php echo $unitbagus ?>
                </td>
                <td class="">
                    <?php echo $unitrusak ?>
                </td>
                <td class="">
                    <?php echo $hpp ?>
                </td>
                <td class="">
                    <?php echo $sebelumpajak?>
                </td>
                <td class="">
                    <?php echo $ppn ?>
                </td>
                <td class="">
                    <?php echo $setelahpajak ?>
                </td>
                <td class="">
                    <?php echo $hargasetoran ?>
                </td>
                <td class="">
                    <?php echo $jumlah?>
                </td>
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
				document.getElementById("kode").value = $(this).attr('data-kode');
                $('#myModal').modal('hide');
            });
			

//            tabel lookup mahasiswa
            $(function () {
                $("#lookup").dataTable();
            });

            function dummy() {
                var nama = document.getElementById("nama").value;
                alert('Nama ' + nim + ' berhasil tersimpan');
				
				var kode = document.getElementById("kode").value;
                alert('Kode ' + ket + ' berhasil tersimpan');
            }
        </script>


</body>
</html>
<div class="content-wrapper col-12">
<section class="content-header ml mt-2 auto">

<!-- <ol class=""> -->
<!-- <h2>
    Menu Data Produk
    <div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
            <input type="text" name="keyword" id="" placeholder="Cari Data Produk..." class="form-control" autocomplete="off">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            </div>
        </form>
    </div>
</div>
</h2> -->


<div class="card shadow mb-4">
<div class="card-header py-3">

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
             <form action="<?php echo base_url('barang/search');?>" method="post" onsubmit="dummy();return false">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <label for="weekending" class="input-group-text">Barang :</label>
                    </div>
                    <input type="text" name="nama" id="nama" class="form-control form-control-sm" data-toggle="modal" data-target="#myModal">
                </div>
                <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="noinv" class="input-group-text">Kode :</label>
                    </div>
                    <input type="text" name="kode" id="kode" class="form-control form-control-sm">
                </div>
				<div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
					 <button type="submit" class="btn btn-info mb-2">Filter</button>
                    </div>
                </div>
                <!-- <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="namawin2mgr" class="input-group-text">Nama Win2 Mgr :</label>
                    </div>
                    <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm">
                    <input type="text" name="namawin2mgr" id="namawin2mgr" class="form-control form-control-sm">
                </div> -->
                <!-- <div class="input-group input-group-sm mt-1">
                    <div class="input-group-prepend">
                        <label for="security" class="input-group-text">Akun Security :</label>
                    </div>
                    <input type="text" name="security" id="security" class="form-control form-control-sm">
                    <input type="text" name="security" id="security" class="form-control form-control-sm">
                </div> -->
            </form>
        </div>
        <div class="col-lg-2">
        <form action="<?php echo base_url('barang/index_show');?>" method="post">
        <button type="submit" class="btn btn-primary">Show All </button>
        </form>
        </div>
        <div class="col-lg-4">
            <form action="<?php echo base_url('barang/index_search');?>" method="post">
                <div class="d-flex">
                <div class="input-group input-group-sm">
                    <!-- <div class="input-group-prepend">
                        <label for="manager" class="input-group-text">Manager :</label>
                    </div> -->
                    <!-- <input type="text" name="manager" id="manager" class="form-control form-control-sm"> -->
                      <select name="kategori" class="form-control form-control-sm" required>
                    <option  value="">Pilih</option>                    
				     <?php foreach($get_kategori as $row) { ?>
					<option value="<?php echo $row->kategori;?>"><?php echo $row->kategori;?></option>
					<?php } ?>
                        </select>
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
                    <select name="gudang" class="form-control form-control-sm" required>
                    <option  value="">Pilih</option>                    
				   <?php foreach($get_gudang as $row) { ?>
					<option value="<?php echo $row->gudang;?>"><?php echo $row->gudang;?></option>
					<?php } ?>
                        </select>
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
        <form action="" method="post">
        <button type="submit" class="btn btn-primary">Filter</button>
        </form>
        </div>
    </div>
    
<a href="#" class="btn btn-info mb-2" data-toggle="modal" data-target="#modal_add_new">Tambah Data</a>
<!-- <a href="<?= base_url('barang/laporan_pdf');?>" class="btn btn-danger mb-2">Export PDF</a> -->
<a href="<?= base_url('barang/excel');?>" class="btn btn-success mb-2">Export Excel</a>
<a href="<?= base_url('barang/import_excell');?>" class="btn btn-info mb-2">Import Excel</a>
<a href="<?= base_url('barang/transfer_gudang');?>" class="btn btn-secondary mb-2">Transfer Antar Gudang</a>
<a href="<?= base_url('barang/transfer_gudang');?>" class="btn btn-warning mb-2">Return</a>



<!-- </div> -->


 </div>
 <div class="card-body">
  <div class="table-responsive">
<!-- <table class="table" id="dataTable" width="" cellspacing="0"> -->

 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr >
                <th>No.</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Manager</th>
                <th>Gudang</th>
                <th>QTY</th>
                <th>Unit Bagus</th>
                <th>Unit Rusak</th>
                <th>HPP</th>
                <th>Harga Sebelum Pajak</th>
                <th>PPN</th>
                <th>Harga Setelah Pajak</th>
                <th>Harga Setoran</th>
                <th>Jumlah Modal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
		 <?php 
				$no = 1;				   
				foreach($data->result_array() as $i):
					$id=$i['id'];
					$kode=$i['kode'];
					$nama=$i['nama'];
					$kategori=$i['kategori'];
					$gudang=$i['gudang'];
					$manager=$i['manager'];
					$gudang=$i['gudang'];
					$qty=$i['qty'];
					$unitbagus=$i['unitbagus'];
					$unitrusak=$i['unitrusak'];
					$hpp=$i['hpp'];
					$sebelumpajak=$i['sebelumpajak'];
				   $ppn=$i['ppn'];
					$setelahpajak=$i['setelahpajak'];
					$hargasetoran=$i['hargasetoran'];
					$jumlah=$i['jumlah'];
			?>
          
            <tr>
                <td width=""><?php echo $no++ ?>
                </td>
                <td>
                    <?php echo $kode ?>
                </td>
                <td width="">
                    <?php echo $nama ?>
                </td>
                <td>
                    <?php echo $kategori ?>
                </td>
                <td>
                    <?php echo $manager ?>
                </td>
                <td>
                    <?php echo $gudang ?>
                </td>
                <td class="">
                    <?php echo $qty?>
                </td>
                <td class="">
                    <?php echo $unitbagus ?>
                </td>
                <td class="">
                    <?php echo $unitrusak ?>
                </td>
                <td class="">
                    <?php echo $hpp ?>
                </td>
                <td class="">
                    <?php echo $sebelumpajak?>
                </td>
                <td class="">
                    <?php echo $ppn ?>
                </td>
                <td class="">
                    <?php echo $setelahpajak ?>
                </td>
                <td class="">
                    <?php echo $hargasetoran ?>
                </td>
                <td class="">
                    <?php echo $jumlah?>
                </td>
                <td>
                
                <div class="btn-group" >
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                    </button>
                    <div class="dropdown-menu">
                    <a data-toggle="modal" data-target="#modal_edit<?php echo $id;?>" class="btn btn-success mt-2" style="margin-left:42px"><i class="fa fa-edit"></i>Edit</i></a>
                    <a href="<?= base_url();?>barang/hapus/<?= $id;?>" class="btn btn-danger mt-2" style="margin-left:35px" onclick="return confirm('Yakin ingin dihapus?');"><i class="fa fa-trash"></i>Hapus</a>
                    </div>
                </div>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
    <!-- Untuk Footer Bawah -->

    </div>
</div>
 </div>
 
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
			  <div class="col-md-12">
			  <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <form role="form" method="post" action="<?php echo base_url().'barang/tambah'?>">
              <div class="box-body">
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">Kode</label>
                <input type="text" class="form-control" id="inputKode" name="kode" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputBarang">Nama Barang</label>
                <input type="text" class="form-control" id="inputBarang" name="nama" required>
                </div>
            </div>
			
			<div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputKategori">Kategori</label>
                 <select class="form-control"  name="kategori"required>
				   <option  value="">Pilih</option>                    
				   <?php foreach($get_category as $row) { ?>
					<option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
					<?php } ?>
                   </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputKategori">Manager</label>
                <input type="text" class="form-control" id="inputKategori" placeholder="" name="manager">
            </div>
			</div>
			
			<div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputGudang">Gudang</label>
                <select class="form-control"  name="gudang"required>
				   <option  value="">Pilih</option>                    
				   <?php foreach($get_category1 as $row) { ?>
					<option value="<?php echo $row->nama;?>"><?php echo $row->nama;?></option>
					<?php } ?>
                   </select>
            </div>
			
                <div class="form-group col-md-6">
                <label for="inputCity">Harga Sebelum Pajak</label>
                <input type="text" class="form-control" id="inputCity" name="sebelumpajak" required>
                </div>
			</div>	
     
	           
			<div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputZip">PPN</label>
                <input type="text" class="form-control" id="inputZip" name="ppn" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputZip">Harga Setelah Pajak</label>
                <input type="text" class="form-control" id="inputZip" name="setelahpajak" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputbagus">Unit Bagus</label>
                <input type="text" class="form-control" id="inputbagus" name="unitbagus" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputrusak">Unit Rusak</label>
                <input type="text" class="form-control" id="inputrusak" name="unitrusak" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSetoran">Harga Setoran</label>
                <input type="text" class="form-control" id="inputSetoran" name="hargasetoran" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputStok">Stok Awal</label>
                <input type="text" class="form-control" id="inputStok" name="qty" required>
                </div>
            </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">HPP</label>
                <input type="text" class="form-control" id="inputCity" name="hpp" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" required>
                </div>
            </div>
                
 
              </div>
              <!-- /.box-body -->

            
            
			</div>
			</div>
			</section>
              </div>
              <div class="modal-footer">
			  <button type="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
              </div>
			  </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        
    <!--END MODAL ADD BARANG-->
	
	 <!--END MODAL ADD BARANG-->
	
	   <?php 
        foreach($data->result_array() as $i):
           $id=$i['id'];
					$kode=$i['kode'];
					$nama=$i['nama'];
					$kategori=$i['kategori'];
					$gudang=$i['gudang'];
					$manager=$i['manager'];
					$gudang=$i['gudang'];
					$qty=$i['qty'];
					$unitbagus=$i['unitbagus'];
					$unitrusak=$i['unitrusak'];
					$hpp=$i['hpp'];
					$sebelumpajak=$i['sebelumpajak'];
				   $ppn=$i['ppn'];
					$setelahpajak=$i['setelahpajak'];
					$hargasetoran=$i['hargasetoran'];
					$jumlah=$i['jumlah'];
        ?>
        <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
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
              <h3 class="box-title"></h3>
            </div>
            <form role="form" method="post" action="<?php echo base_url().'barang/edit'?>">
              <div class="box-body">
				<div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">Kode</label>
                <input type="text" class="form-control" id="inputKode" name="kode" value="<?php echo $kode;?>" required>
				<input type="hidden" name="id" maxlength="11" class="form-control" value="<?php echo $id;?>" readonly>
                </div>
                <div class="form-group col-md-6">
                <label for="inputBarang">Nama Barang</label>
                <input type="text" class="form-control" id="inputBarang" name="nama" required value="<?php echo $nama;?>">
                </div>
            </div>
			
			<div class="form-row">
            <div class="form-group col-md-6">
               <label for="inputKategori">Kategori</label>
                 <select class="form-control"  name="kategori"required>
				   <option  value="<?php echo $kategori;?>">Pilih</option>                    
				   <?php foreach($get_category as $row) { ?>
					<option value="<?php echo $row->name;?>"><?php echo $row->name;?></option>
					<?php } ?>
                   </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputKategori">Manager</label>
                <input type="text" class="form-control" id="inputKategori" value="<?php echo $manager;?>" name="manager">
            </div>
			</div>
			
			<div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputGudang">Gudang</label>
               <select class="form-control"  name="gudang"required>
				   <option  value="<?php echo $gudang;?>">Pilih</option>                    
				   <?php foreach($get_category1 as $row) { ?>
					<option value="<?php echo $row->nama;?>"><?php echo $row->nama;?></option>
					<?php } ?>
                   </select>
            </div>
			
                <div class="form-group col-md-6">
                <label for="inputCity">Harga Sebelum Pajak</label>
                <input type="text" class="form-control" id="inputCity" name="sebelumpajak" required value="<?php echo $sebelumpajak;?>">
                </div>
			</div>	
     
	           
			<div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputZip">PPN</label>
                <input type="text" class="form-control" id="inputZip" name="ppn" value="<?php echo $ppn;?>" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputZip">Harga Setelah Pajak</label>
                <input type="text" class="form-control" id="inputZip" name="setelahpajak" value="<?php echo $setelahpajak;?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputbagus">Unit Bagus</label>
                <input type="text" class="form-control" id="inputbagus" name="unitbagus" value="<?php echo $unitbagus;?>" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputrusak">Unit Rusak</label>
                <input type="text" class="form-control" id="inputrusak" name="unitrusak" value="<?php echo $unitrusak;?>" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSetoran">Harga Setoran</label>
                <input type="text" class="form-control" id="inputSetoran" name="hargasetoran" value="<?php echo $hargasetoran;?>" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputStok">Stok Awal</label>
                <input type="text" class="form-control" id="inputStok" name="qty" value="<?php echo $qty;?>" required>
                </div>
            </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">HPP</label>
                <input type="text" class="form-control" id="inputCity" name="hpp" value="<?php echo $hpp;?>" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah" value="<?php echo $jumlah;?>" required>
                </div>
            </div>
 
              </div>
              <!-- /.box-body -->
			</div>
			</div>
			</section>
              </div>
              <div class="modal-footer">
			  <button type="submit" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
			  </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
          <?php endforeach;?>
    <!-- ============ MODAL EDIT BARANG =============== -->