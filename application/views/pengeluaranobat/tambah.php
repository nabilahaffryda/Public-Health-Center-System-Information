<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pengeluaran Obat
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_pengeluaran">ID Pengeluaran</label>
                            <input type="text" class="form-control" id="id_pengeluaran" name="id_pengeluaran">
                        </div>
                        <div class="form-group">
                            <label for="no_terima_obat">No Terima Obat</label>
                            <input type="text" class="form-control" id="no_terima_obat" name="no_terima_obat">
                        </div>
                        <div class="form-group">
                            <label for="no_rekamedis">No Rekam Medis</label>
                            <input type="text" class="form-control" id="no_rekamedis" name="no_rekamedis">
                        </div>
                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="kode_obat">Kode obat</label>
                            <input type="text" class="form-control" id="kode_obat" name="kode_obat">
                        </div>
                        <div class="form-group">
                            <label for="nama_obat">Nama obat</label>
                            <input type="text" class="form-control" id="nama_obat" name="nama_obat">
                        </div>
                        <div class="form-group">
                            <label for="jenis_obat">Jenis Obat</label>
                            <input type="text" class="form-control" id="jenis_obat" name="jenis_obat">
                        </div>
                        <div class="form-group">
                            <label for="dosis_aturan_obat">Dosis Aturan Obat</label>
                            <input type="number" class="form-control" id="dosis_aturan_obat" name="dosis_aturan_obat">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name="satuan">
                        </div>
                        <div class="form-group">
                            <label for="tgl_serah_obat">Tanggal Serah Obat</label>
                            <input type="date" class="form-control" id="tgl_serah_obat" name="tgl_serah_obat">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        <a href="<?= base_url();?>pengeluaranobat" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

