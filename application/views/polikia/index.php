          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables polikia</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data polikia<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>polikia/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID KIA</th>
                        <th>No Rekam Medis</th>
                        <th>Nama Pasien</th>
                        <th>No BPJS</th>
                        <th>Status Pasien</th>
                        <th>Kode Operasi</th>
                        <th>Nama Operasi</th>
                        <th>Biaya</th>
                        <th>Ditangani Oleh</th>
                        <th>Dibayar</th>
                        <th>Kembalian</th>
                        <th>Keterangan</th>
                        <th>Tanggal Tindakan</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_kesehatan_ibu_anak as $kia):?>
                    <tr>
                        <td><?= $kia['id_kia']?></td>
                        <td><?= $kia['no_rekamedis']?></td>
                        <td><?= $kia['nama_pasien']?></td>
                        <td><?= $kia['no_bpjs']?></td>
                        <td><?= $kia['status_pasien']?></td>
                        <td><?= $kia['kode_operasi']?></td>
                        <td><?= $kia['nama_operasi']?></td>
                        <td><?= $kia['biaya']?></td>
                        <td><?= $kia['ditangani_oleh']?></td>
                        <td><?= $kia['dibayar']?></td>
                        <td><?= $kia['kembalian']?></td>
                        <td><?= $kia['keterangan']?></td>
                        <td><?= $kia['tgl_tindakan']?></td>
                        <td>
                            <a href="<?= base_url();?>polikia/hapus/<?= $kia['id_kia'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>polikia/edit/<?= $kia['id_kia'];?>"
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