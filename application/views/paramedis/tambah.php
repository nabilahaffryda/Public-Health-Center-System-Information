<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Paramedis
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_paramedis">Kode Paramedis</label>
                            <input type="text" class="form-control" id="kode_paramedis" name="kode_paramedis">
                        </div>
                        <div class="form-group">
                            <label for="nama_paramedis">Nama Paramedis</label>
                            <input type="text" class="form-control" id="nama_paramedis" name="nama_paramedis">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" 
                            class="form-control" 
                            id="jenis_kelamin" 
                            name="jenis_kelamin">
                        </div>
                        <div class="form-group">
                            <label for="no_izin_paramedis">No Izin Paramedis</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_izin_paramedis" 
                            name="no_izin_paramedis">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" 
                            class="form-control" 
                            id="tempat_lahir" 
                            name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" 
                            class="form-control" 
                            id="tanggal_lahir" 
                            name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="alamat_tinggal">Alamat Tinggal</label>
                            <input type="text" 
                            class="form-control" 
                            id="alamat_tinggal" 
                            name="alamat_tinggal">
                        </div>
                        <div class="form-group">
                            <label for="id_poli">ID Poli</label>
                            <input type="text" 
                            class="form-control" 
                            id="id_poli" 
                            name="id_poli">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                        <a href="<?= base_url();?>paramedis" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

