<div class="container">
    <div class="col-md-6">
        <h5>Edit Form Data</h5>

        <form action="" method="POST"> 
            <input type="hidden" name="id" value="<?= $produk['id'];?>" />
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputKode">Kode</label>
                <input type="text" class="form-control" id="inputKode" name="kode"  value="<?= $produk['kode'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputBarang">Nama Barang</label>
                <input type="text" class="form-control" id="inputBarang" name="nama"  value="<?= $produk['nama'];?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputKategori">Kategori</label>
                <input type="text" class="form-control" id="inputKategori" placeholder="" name="id_role" value="<?= $produk['id_role'];?>">
            </div>
            <div class="form-group">
                <label for="inputManager">Manager</label>
                <input type="text" class="form-control" id="inputManager" placeholder="" name="manager" value="<?= $produk['manager'];?>">
            </div>
            <div class="form-group">
                <label for="inputGudang">Gudang</label>
                <input type="text" class="form-control" id="inputGudang" placeholder="" name="gudang" value="<?= $produk['gudang'];?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                <label for="inputCity">Harga Sebelum Pajak</label>
                <input type="text" class="form-control" id="inputCity" name="sebelumpajak"  value="<?= $produk['sebelumpajak'];?>">
                </div>
     
                <div class="form-group col-md-2">
                <label for="inputZip">PPN</label>
                <input type="text" class="form-control" id="inputZip" name="ppn"  value="<?= $produk['ppn'];?>">
                </div>
                <div class="form-group col-md-5">
                <label for="inputZip">Harga Setelah Pajak</label>
                <input type="text" class="form-control" id="inputZip" name="setelahpajak"  value="<?= $produk['setelahpajak'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputbagus">Unit Bagus</label>
                <input type="text" class="form-control" id="inputbagus" name="unitbagus"  value="<?= $produk['unitbagus'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputrusak">Unit Rusak</label>
                <input type="text" class="form-control" id="inputrusak" name="unitrusak"  value="<?= $produk['unitrusak'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSetoran">Harga Setoran</label>
                <input type="text" class="form-control" id="inputSetoran" name="hargasetoran"  value="<?= $produk['hargasetoran'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputStok">Stok Awal</label>
                <input type="text" class="form-control" id="inputStok" name="qty"  value="<?= $produk['jumlah'];?>">
                </div>
                
            </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputHpp">HPP</label>
                <input type="text" class="form-control" id="inputHpp" name="hpp"  value="<?= $produk['hpp'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="jumlah"  value="<?= $produk['jumlah'];?>">
                </div>
            
            </div>
            <button type="submit" class="btn btn-primary mb-2">Edit Data</button>
            <a href="<?= base_url('barang');?>" class="btn btn-success mb-2">Kembali</a>
            </form>
    </div>
</div>