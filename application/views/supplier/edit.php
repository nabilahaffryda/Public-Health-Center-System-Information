<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Supplier
                </div>
                <div class="card-body">
                <?php if(validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="kode_supplier" value="<?= $tbl_supplier['kode_supplier'];?>">
                            <label for="kode_supplier">Kode Supplier</label>
                            <input type="text" 
                            class="form-control" 
                            id="kode_supplier" 
                            name="kode_supplier"
                             value="<?= $tbl_supplier['kode_supplier'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_supplier">Nama Supplier</label>
                            <input type="text" 
                            class="form-control" 
                            id="nama_supplier" 
                            name="nama_supplier"
                            value="<?= $tbl_supplier['nama_supplier'];?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" 
                            class="form-control" 
                            id="alamat" 
                            name="alamat"
                            value="<?= $tbl_supplier['alamat'];?>">
                        </div>
                        <div class="form-group">
                            <label for="no_telpon">No Telfon</label>
                            <input type="text" 
                            class="form-control" 
                            id="no_telpon" 
                            name="no_telpon"
                            value="<?= $tbl_supplier['no_telpon'];?>">
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                        <a href="<?= base_url();?>supplier" class="btn btn-primary float-left">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>