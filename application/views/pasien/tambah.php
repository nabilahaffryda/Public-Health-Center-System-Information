<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data pasien
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="no_rekamedis">No Rekam Medis</label>
                            <input type="text" class="form-control" id="no_rekamedis" name="no_rekamedis">
                        </div>
                        <div class="form-group">
                            <label for="no_ktp">No KTP</label>
                            <input type="text" class="form-control" id="no_ktp" name="no_ktp">
                        </div>
                        <div class="form-group">
                            <label for="no_bpjs">No BPJS</label>
                            <input type="text" class="form-control" id="no_bpjs" name="no_bpjs">
                        </div>
                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <?php foreach($jenis_kelamin as $key): ?>
                                    <option value="<?= $key ?>"selected><?= $key ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="status_pasien">Status Pasien</label>
                            <input type="text" class="form-control" id="status_pasien" name="status_pasien">
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        <a href="<?= base_url();?>pasien" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

