          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Paramedis</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data Paramedis<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>paramedis/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode Paramedis</th>
                      <th>Nama Paramedis</th>
                      <th>Jenis Kelamin</th>
                      <th>No Izin Paramedis</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat Tinggal</th>
                      <th>ID Poli</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_paramedis as $pmd):?>
                    <tr>
                        <td><?= $pmd['kode_paramedis']?></td>
                        <td><?= $pmd['nama_paramedis']?></td>
                        <td><?= $pmd['jenis_kelamin']?></td>
                        <td><?= $pmd['no_izin_paramedis']?></td>
                        <td><?= $pmd['tempat_lahir']?></td>
                        <td><?= $pmd['tanggal_lahir']?></td>
                        <td><?= $pmd['alamat_tinggal']?></td>
                        <td><?= $pmd['id_poli']?></td>
                        <td>
                            <a href="<?= base_url();?>paramedis/hapus/<?= $pmd['kode_paramedis'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>paramedis/edit/<?= $pmd['kode_paramedis'];?>"
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