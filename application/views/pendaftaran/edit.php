<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Pendaftaran
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="no_registrasi" value="<?= $tbl_pendaftaran['no_registrasi'];?>">
                            <label for="no_registrasi">No Registrasi</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_registrasi" 
                            name="no_registrasi"
                             value="<?= $tbl_pendaftaran['no_registrasi'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_rawat">No Rawat</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_rawat" 
                            name="no_rawat"
                            value="<?= $tbl_pendaftaran['no_rawat'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_rekamedis">No Rekam Medis</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_rekamedis" 
                            name="no_rekamedis"
                            value="<?= $tbl_pendaftaran['no_rekamedis'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_daftar">Tanggal Daftar</label>
                            <input type="date" 
                            class="form-control" 
                            id="tanggal_daftar" 
                            name="tanggal_daftar"
                            value="<?= $tbl_pendaftaran['tanggal_daftar'];?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_dokter">Kode Dokter</label>
                            <input type="text" 
                            class="form-control" 
                            id="kode_dokter" 
                            name="kode_dokter"
                            value="<?= $tbl_pendaftaran['kode_dokter'];?>">
                        </div>
                        <div class="form-group">
                            <label for="id_poli">ID Poli</label>
                            <input type="number" 
                            class="form-control" 
                            id="id_poli" 
                            name="id_poli"
                            value="<?= $tbl_pendaftaran['id_poli'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_penanggung_jawab">Nama Penanggung Jawab</label>
                            <input type="text" 
                            class="form-control" 
                            id="nama_penanggung_jawab" 
                            name="nama_penanggung_jawab"
                            value="<?= $tbl_pendaftaran['nama_penanggung_jawab'];?>">
                        </div>
                        <div class="form-group">
                            <label for="hubungan_dengan_penanggung_jawab">Hubungan dengan Penanggung Jawab</label>
                            <input type="text" 
                            class="form-control" 
                            id="hubungan_dengan_penanggung_jawab" 
                            name="hubungan_dengan_penanggung_jawab"
                            value="<?= $tbl_pendaftaran['hubungan_dengan_penanggung_jawab'];?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat_penanggung_jawab">Alamat Penanggung Jawab</label>
                            <input type="text" 
                            class="form-control" 
                            id="alamat_penanggung_jawab" 
                            name="alamat_penanggung_jawab"
                            value="<?= $tbl_pendaftaran['alamat_penanggung_jawab'];?>">
                        </div>
                        <div class="form-group">
                            <label for="status_pasien">Status Pasien</label>
                            <input type="text" 
                            class="form-control" 
                            id="status_pasien" 
                            name="status_pasien"
                            value="<?= $tbl_pendaftaran['status_pasien'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_bpjs">No BPJS</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_bpjs" 
                            name="no_bpjs"
                            value="<?= $tbl_pendaftaran['no_bpjs'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        <a href="<?= base_url();?>pendaftaran" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>