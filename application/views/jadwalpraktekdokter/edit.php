<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Jadwal Praktek Dokter
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id_jadwal" value="<?= $tbl_jadwal_praktek_dokter['id_jadwal'];?>">
                            <label for="id_jadwal">ID Jadwal</label>
                            <input type="number" 
                            class="form-control" 
                            id="id_jadwal" 
                            name="id_jadwal"
                             value="<?= $tbl_jadwal_praktek_dokter['id_jadwal'];?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_dokter">Kode Dokter</label>
                            <input type="text" 
                            class="form-control" 
                            id="kode_dokter" 
                            name="kode_dokter"
                            value="<?= $tbl_jadwal_praktek_dokter['kode_dokter'];?>">
                        </div>
                        <div class="form-group">
                            <label for="hari">Hari</label>
                            <input type="text" 
                            class="form-control" 
                            id="hari" 
                            name="hari"
                            value="<?= $tbl_jadwal_praktek_dokter['hari'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jam_mulai">Jam Mulai</label>
                            <input type="text" 
                            class="form-control" 
                            id="jam_mulai" 
                            name="jam_mulai"
                            value="<?= $tbl_jadwal_praktek_dokter['jam_mulai'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jam_selesai">Jam Selesai</label>
                            <input type="text" 
                            class="form-control" 
                            id="jam_selesai" 
                            name="jam_selesai"
                            value="<?= $tbl_jadwal_praktek_dokter['jam_selesai'];?>">
                        </div>
                        <div class="form-group">
                            <label for="id_poli">ID Poli</label>
                            <input type="number" 
                            class="form-control" 
                            id="id_poli" 
                            name="id_poli"
                            value="<?= $tbl_jadwal_praktek_dokter['id_poli'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        <a href="<?= base_url();?>jadwalpraktekdokter" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>