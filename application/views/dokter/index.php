          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables dokter</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data dokter<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>dokter/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Dokter</th>
                      <th>Nama Dokter</th>
                      <th>Jenis Kelamin</th>
                      <th>No Induk Dokter</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat Tinggal</th>
                      <th>ID Poli</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_dokter as $dkr):?>
                    <tr>
                        <td><?= $dkr['kode_dokter']?></td>
                        <td><?= $dkr['nama_dokter']?></td>
                        <td><?= $dkr['jenis_kelamin']?></td>
                        <td><?= $dkr['nomor_induk_dokter']?></td>
                        <td><?= $dkr['tempat_lahir']?></td>
                        <td><?= $dkr['tanggal_lahir']?></td>
                        <td><?= $dkr['alamat_tinggal']?></td>
                        <td><?= $dkr['id_poli']?></td>
                        <td>
                            <a href="<?= base_url();?>dokter/hapus/<?= $dkr['kode_dokter'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>dokter/edit/<?= $dkr['kode_dokter'];?>"
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