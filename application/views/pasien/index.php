          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables pasien</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data pasien<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>pasien/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No Rekam Medis</th>
                      <th>No KTP</th>
                      <th>No BPJS</th>
                      <th>Nama Pasien</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>Status Pasien</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_pasien as $ps):?>
                    <tr>
                        <td><?= $ps['no_rekamedis']?></td>
                        <td><?= $ps['no_ktp']?></td>
                        <td><?= $ps['no_bpjs']?></td>
                        <td><?= $ps['nama_pasien']?></td>
                        <td><?= $ps['jenis_kelamin']?></td>
                        <td><?= $ps['tempat_lahir']?></td>
                        <td><?= $ps['tanggal_lahir']?></td>
                        <td><?= $ps['alamat']?></td>
                        <td><?= $ps['status_pasien']?></td>
                        <td>
                            <a href="<?= base_url();?>pasien/hapus/<?= $ps['no_rekamedis'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>pasien/edit/<?= $ps['no_rekamedis'];?>"
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