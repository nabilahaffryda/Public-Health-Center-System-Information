<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Paramedis
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="kode_paramedis" value="<?= $tbl_paramedis['kode_paramedis'];?>">
                            <label for="kode_paramedis">Kode Paramedis</label>
                            <input type="text" 
                            class="form-control" 
                            id="kode_paramedis" 
                            name="kode_paramedis"
                             value="<?= $tbl_paramedis['kode_paramedis'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_paramedis">Nama Paramedis</label>
                            <input type="text" 
                            class="form-control" 
                            id="nama_paramedis" 
                            name="nama_paramedis"
                            value="<?= $tbl_paramedis['nama_paramedis'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" 
                            class="form-control" 
                            id="jenis_kelamin" 
                            name="jenis_kelamin"
                            value="<?= $tbl_paramedis['jenis_kelamin'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_izin_paramedis">No Induk paramedis</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_izin_paramedis" 
                            name="no_izin_paramedis"
                            value="<?= $tbl_paramedis['no_izin_paramedis'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" 
                            class="form-control" 
                            id="tempat_lahir" 
                            name="tempat_lahir"
                            value="<?= $tbl_paramedis['tempat_lahir'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" 
                            class="form-control" 
                            id="tanggal_lahir" 
                            name="tanggal_lahir"
                            value="<?= $tbl_paramedis['tanggal_lahir'];?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat_tinggal">Alamat Tinggal</label>
                            <input type="text" 
                            class="form-control" 
                            id="alamat_tinggal" 
                            name="alamat_tinggal"
                            value="<?= $tbl_paramedis['alamat_tinggal'];?>">
                        </div>
                        <div class="form-group">
                            <label for="id_poli">ID Poli</label>
                            <input type="text" 
                            class="form-control" 
                            id="id_poli" 
                            name="id_poli"
                            value="<?= $tbl_paramedis['id_poli'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        <a href="<?= base_url();?>paramedis" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>