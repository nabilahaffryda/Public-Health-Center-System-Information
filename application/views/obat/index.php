          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data obat<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>obat/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Dosis Aturan Obat</th>
                        <th>Satuan</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_obat as $ob):?>
                    <tr>
                        <td><?= $ob['kode_obat']?></td>
                        <td><?= $ob['nama_obat']?></td>
                        <td><?= $ob['jenis_obat']?></td>
                        <td><?= $ob['dosis_aturan_obat']?></td>
                        <td><?= $ob['satuan']?></td>
                        <td>
                            <a href="<?= base_url();?>obat/hapus/<?= $ob['kode_obat'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>obat/edit/<?= $ob['kode_obat'];?>"
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