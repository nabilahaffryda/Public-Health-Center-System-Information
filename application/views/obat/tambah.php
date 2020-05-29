<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data obat
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
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
                            <input type="text" class="form-control" id="dosis_aturan_obat" name="dosis_aturan_obat">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name="satuan">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        <a href="<?= base_url();?>obat" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

