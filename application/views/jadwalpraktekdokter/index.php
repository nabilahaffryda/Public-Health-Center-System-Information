          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Jadwal Praktek Dokter</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data Jadwal Praktek Dokter<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>jadwalpraktekdokter/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Jadwal</th>
                      <th>Kode Dokter</th>
                      <th>Hari</th>
                      <th>Jam Mulai</th>
                      <th>Jam Selesai</th>
                      <th>ID Poli</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_jadwal_praktek_dokter as $jpd):?>
                    <tr>
                        <td><?= $jpd['id_jadwal']?></td>
                        <td><?= $jpd['kode_dokter']?></td>
                        <td><?= $jpd['hari']?></td>
                        <td><?= $jpd['jam_mulai']?></td>
                        <td><?= $jpd['jam_selesai']?></td>
                        <td><?= $jpd['id_poli']?></td>
                        <td>
                            <a href="<?= base_url();?>jadwalpraktekdokter/hapus/<?= $jpd['id_jadwal'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>jadwalpraktekdokter/edit/<?= $jpd['id_jadwal'];?>"
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