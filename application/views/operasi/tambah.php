<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Operasi
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_operasi">Kode Operasi</label>
                            <input type="text" class="form-control" id="kode_operasi" name="kode_operasi">
                        </div>
                        <div class="form-group">
                            <label for="nama_operasi">Nama Operasi</label>
                            <input type="text" class="form-control" id="nama_operasi" name="nama_operasi">
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="number" class="form-control" id="biaya" name="biaya">
                        </div>
                        <div class="form-group">
                            <label for="ditangani_oleh">Ditangani Oleh</label>
                            <select class="form-control" id="ditangani_oleh" name="ditangani_oleh">
                            <?php foreach($ditangani_oleh as $key): ?>
                                    <option value="<?= $key ?>"selected><?= $key ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        <a href="<?= base_url();?>operasi" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

