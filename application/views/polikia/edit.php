<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data polikia
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                    <div class="form-group">
                    <input type="hidden" name="no_rekamedis" value="<?= $tbl_kesehatan_ibu_anak['id_kia'];?>">
                            <label for="id_kia">ID KIA</label>
                            <input type="number" class="form-control" id="id_kia" name="id_kia"
                            value="<?= $tbl_kesehatan_ibu_anak['id_kia'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_rekamedis">No Rekam Medis</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_rekamedis" 
                            name="no_rekamedis"
                            value="<?= $tbl_kesehatan_ibu_anak['no_rekamedis'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_pasien">Nama Pasien</label>
                            <input type="text" 
                            class="form-control" 
                            id="nama_pasien" 
                            name="nama_pasien"
                            value="<?= $tbl_kesehatan_ibu_anak['nama_pasien'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_bpjs">No BPJS</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_bpjs" 
                            name="no_bpjs"
                            value="<?= $tbl_kesehatan_ibu_anak['no_bpjs'];?>">
                        </div>
                        <div class="form-group">
                            <label for="status_pasien">Status Pasien</label>
                            <input type="text" 
                            class="form-control" 
                            id="status_pasien" 
                            name="status_pasien"
                            value="<?= $tbl_kesehatan_ibu_anak['status_pasien'];?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_operasi">Kode Operasi</label>
                            <input type="text" 
                            class="form-control" 
                            id="kode_operasi" 
                            name="kode_operasi"
                            value="<?= $tbl_kesehatan_ibu_anak['kode_operasi'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_operasi">Nama Operasi</label>
                            <input type="text" class="form-control" id="nama_operasi" 
                            name="nama_operasi"
                            value="<?= $tbl_kesehatan_ibu_anak['nama_operasi'];?>">
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="number" class="form-control" id="biaya" name="biaya"
                            value="<?= $tbl_kesehatan_ibu_anak['biaya'];?>">
                        </div>
                        <div class="form-group">
                            <label for="ditangani_oleh">Ditangani Oleh</label>
                            <select class="form-control" id="ditangani_oleh" name="ditangani_oleh">
                                <?php foreach($ditangani_oleh as $key): ?>
                                    <?php if($key ==$tbl_kesehatan_ibu_anak['ditangani_oleh']) : ?>
                                        <option value="<?= $key ?>"selected><?= $key ?></option>
                                    <?php else :?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dibayar">Dibayar</label>
                            <input type="number" class="form-control" id="dibayar" 
                            name="dibayar"
                            value="<?= $tbl_kesehatan_ibu_anak['dibayar'];?>">
                        </div>
                        <div class="form-group">
                            <label for="kembalian">Kembalian</label>
                            <input type="number" class="form-control" id="kembalian" 
                            name="kembalian"
                            value="<?= $tbl_kesehatan_ibu_anak['kembalian'];?>">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" 
                            name="keterangan"
                            value="<?= $tbl_kesehatan_ibu_anak['keterangan'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_tindakan">Tanggal Tindakan</label>
                            <input type="date" class="form-control" id="tgl_tindakan" 
                            name="tgl_tindakan"
                            value="<?= $tbl_kesehatan_ibu_anak['tgl_tindakan'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        <a href="<?= base_url();?>polikia" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>