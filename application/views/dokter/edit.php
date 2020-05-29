<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Dokter
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="kode_dokter" value="<?= $tbl_dokter['kode_dokter'];?>">
                            <label for="kode_dokter">Kode Dokter</label>
                            <input type="text" 
                            class="form-control" 
                            id="kode_dokter" 
                            name="kode_dokter"
                             value="<?= $tbl_dokter['kode_dokter'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_dokter">Nama Dokter</label>
                            <input type="text" 
                            class="form-control" 
                            id="nama_dokter" 
                            name="nama_dokter"
                            value="<?= $tbl_dokter['nama_dokter'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" 
                            class="form-control" 
                            id="jenis_kelamin" 
                            name="jenis_kelamin"
                            value="<?= $tbl_dokter['jenis_kelamin'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nomor_induk_dokter">No Induk Dokter</label>
                            <input type="text" 
                            class="form-control" 
                            id="nomor_induk_dokter" 
                            name="nomor_induk_dokter"
                            value="<?= $tbl_dokter['nomor_induk_dokter'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" 
                            class="form-control" 
                            id="tempat_lahir" 
                            name="tempat_lahir"
                            value="<?= $tbl_dokter['tempat_lahir'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" 
                            class="form-control" 
                            id="tanggal_lahir" 
                            name="tanggal_lahir"
                            value="<?= $tbl_dokter['tanggal_lahir'];?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat_tinggal">Alamat Tinggal</label>
                            <input type="text" 
                            class="form-control" 
                            id="alamat_tinggal" 
                            name="alamat_tinggal"
                            value="<?= $tbl_dokter['alamat_tinggal'];?>">
                        </div>
                        <div class="form-group">
                            <label for="id_poli">ID Poli</label>
                            <input type="text" 
                            class="form-control" 
                            id="id_poli" 
                            name="id_poli"
                            value="<?= $tbl_dokter['id_poli'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        <a href="<?= base_url();?>dokter" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>