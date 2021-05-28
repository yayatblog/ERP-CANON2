<div class="container">
    <div class="col-md-6">

          <form action="<?php echo base_url().'barang2/transfer_gudang'?>" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="date">Tanggal</label>
                <input type="text" class="form-control" value="<?php echo date ('d-m-Y'); ?>" name="tgl" required>
                </div>
                <div class="form-group col-md-6">
                <label for="no_transfer">No. transfer</label>
                <input type="text" class="form-control"  name="no_transfer" required>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control"  name="keterangan">
            </div>
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" value="<?= $produk['kode'];?>" name="kode">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control"  value="<?= $produk['nama'];?>" name="barang">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="gudang_asal">Gudang Asal</label>
                <input type="text" class="form-control" value="<?= $produk['gudang'];?>" name="gudang_asal" required>
                </div>
     
                <div class="form-group col-md-6">
                <label for="gudang_tujuan">Gudang Tujuan</label>
              <input type="text" class="form-control"  name="gudang_tujuan" required>
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="qty_asal">QTY Asal</label>
                <input type="text" class="form-control" value="<?= $produk['qty'];?>" required>
            </div>
           <div class="form-group col-md-6">
                <label for="qty">QTY Transfer</label>
                <input type="text" class="form-control"  name="qty" required>
				  <input type="hidden" name="kode_id" value="<?php foreach ($users as $daf): ?><?php echo $daf['kode_id'] ?><?php endforeach; ?>" class="form-control">
                </div>
            </div>
            

            <button type="submit" class="btn btn-primary">Transfer</button>
            <a href="<?= base_url('barang2');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>