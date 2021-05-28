<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <input type="hidden" name="id" class="form-control" value="<?= $overrides['id'];?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="nama" value="<?= $overrides['nama'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputKantor">Kantor</label>
                <input type="text" class="form-control" id="inputKantor" name="kantor" value="<?= $overrides['kantor'];?>">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSummary">Summary</label>
                <input type="text" class="form-control" id="inputSummary" name="summary" value="<?= $overrides['summary'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputSaldo">Saldo Awal</label>
                <input type="text" class="form-control" id="inputSaldo" name="saldo_awal" value="<?= $overrides['saldo_awal'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputMasuk">Masuk</label>
                <input type="text" class="form-control" id="inputMasuk" name="masuk" value="<?= $overrides['masuk'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputKeluar">Keluar</label>
                <input type="text" class="form-control" id="inputKeluar" name="keluar" value="<?= $overrides['keluar'];?>">
                </div>
            </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="total" value="<?= $overrides['total'];?>">
                </div>
                <div class="form-group col-md-6">
                <label for="inputSaving">Total Saving</label>
                <input type="text" class="form-control" id="inputSaving" name="total_saving" value="<?= $overrides['total_saving'];?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('saving_overrides');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>