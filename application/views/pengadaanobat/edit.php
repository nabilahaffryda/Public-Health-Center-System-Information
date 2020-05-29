<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data obat
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                        <input type="hidden" name="kode_obat" value="<?= $tbl_pengadaan_obat['id_pengadaan'];?>">
                            <label for="id_pengadaan">ID Pengadaan</label>
                            <input type="text" class="form-control"
                            id="id_pengadaan" name="id_pengadaan"
                            value="<?= $tbl_pengadaan_obat['id_pengadaan'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_trans">No Transaksi</label>
                            <input type="text" class="form-control" id="no_trans" name="no_trans"
                            value="<?= $tbl_pengadaan_obat['no_trans'];?>">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <label for="kode_supplier">Kode Supplier</label>
                            <input type="text" class="form-control" id="kode_supplier" name="kode_supplier"
                            value="<?= $tbl_pengadaan_obat['kode_supplier'];?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_obat">Kode obat</label>
                            <input type="text" 
                            class="form-control" 
                            id="kode_obat" 
                            name="kode_obat"
                             value="<?= $tbl_pengadaan_obat['kode_obat'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_obat">Nama obat</label>
                            <input type="text" 
                            class="form-control" 
                            id="nama_obat" 
                            name="nama_obat"
                            value="<?= $tbl_pengadaan_obat['nama_obat'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_obat">Jenis Obat</label>
                            <input type="text" class="form-control" id="jenis_obat" 
                            name="jenis_obat"
                            value="<?= $tbl_pengadaan_obat['jenis_obat'];?>">
                        </div>
                        <div class="form-group">
                            <label for="harga_beli">Harga Beli</label>
                            <input type="number" class="form-control" 
                            id="harga_beli" name="harga_beli"
                            value="<?= $tbl_pengadaan_obat['harga_beli'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" 
                            id="jumlah" name="jumlah"
                            value="<?= $tbl_pengadaan_obat['jumlah'];?>">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" 
                            id="satuan" name="satuan"
                            value="<?= $tbl_pengadaan_obat['satuan'];?>">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" 
                            id="keterangan" name="keterangan"
                            value="<?= $tbl_pengadaan_obat['keterangan'];?>">
                        </div>
                        <div class="form-group">
                            <label for="total">Total</label>
                            <input type="number" class="form-control" 
                            id="total" name="total"
                            value="<?= $tbl_pengadaan_obat['total'];?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_transaksi">Tanggal Transaksi</label>
                            <input type="date" class="form-control" 
                            id="tgl_transaksi" name="tgl_transaksi"
                            value="<?= $tbl_pengadaan_obat['tgl_transaksi'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        <a href="<?= base_url();?>pengadaanobat" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>