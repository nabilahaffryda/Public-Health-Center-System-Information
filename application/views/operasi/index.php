          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables operasi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data operasi<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>operasi/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Kode Operasi</th>
                        <th>Nama Operasi</th>
                        <th>Biaya</th>
                        <th>Ditangani Oleh</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_operasi as $op):?>
                    <tr>
                        <td><?= $op['kode_operasi']?></td>
                        <td><?= $op['nama_operasi']?></td>
                        <td><?= $op['biaya']?></td>
                        <td><?= $op['ditangani_oleh']?></td>
                        <td>
                            <a href="<?= base_url();?>operasi/hapus/<?= $op['kode_operasi'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>operasi/edit/<?= $op['kode_operasi'];?>"
                                class="badge badge-success float-right">Edit</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->