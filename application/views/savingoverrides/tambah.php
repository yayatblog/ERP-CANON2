<div class="container">
    <div class="col-md-6">
        <h5>Tambah Form Data</h5>

        <form action="" method="POST"> 
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputKantor">Kantor</label>
                <input type="text" class="form-control" id="inputKantor" name="kantor" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputSummary">Summary</label>
                <input type="text" class="form-control" id="inputSummary" name="summary" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputSaldo">Saldo Awal</label>
                <input type="text" class="form-control" id="inputSaldo" name="saldo_awal" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputMasuk">Masuk</label>
                <input type="text" class="form-control" id="inputMasuk" name="masuk" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputKeluar">Keluar</label>
                <input type="text" class="form-control" id="inputKeluar" name="keluar" required>
                </div>
            </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputTotal">Total</label>
                <input type="text" class="form-control" id="inputTotal" name="total" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputSaving">Total Saving</label>
                <input type="text" class="form-control" id="inputSaving" name="total_saving" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="<?= base_url('saving_overrides');?>" class="btn btn-success">Kembali</a>
            </form>
    </div>
</div>