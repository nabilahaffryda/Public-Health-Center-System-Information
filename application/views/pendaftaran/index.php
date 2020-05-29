          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Pendaftaran</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data Pendaftaran<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>pendaftaran/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No Registrasi</th>
                      <th>No Rawat</th>
                      <th>No Rekam Medis</th>
                      <th>Tanggal Daftar</th>
                      <th>Kode Dokter</th>
                      <th>ID Poli</th>
                      <th>Nama Penanggung Jawab</th>
                      <th>Hubungan dengan Penanggung Jawab</th>
                      <th>Alamat Penanggung Jawab</th>
                      <th>Status Pasien</th>
                      <th>No BPJS</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_pendaftaran as $pdf):?>
                    <tr>
                        <td><?= $pdf['no_registrasi']?></td>
                        <td><?= $pdf['no_rawat']?></td>
                        <td><?= $pdf['no_rekamedis']?></td>
                        <td><?= $pdf['tanggal_daftar']?></td>
                        <td><?= $pdf['kode_dokter']?></td>
                        <td><?= $pdf['id_poli']?></td>
                        <td><?= $pdf['nama_penanggung_jawab']?></td>
                        <td><?= $pdf['hubungan_dengan_penanggung_jawab']?></td>
                        <td><?= $pdf['alamat_penanggung_jawab']?></td>
                        <td><?= $pdf['status_pasien']?></td>
                        <td><?= $pdf['no_bpjs']?></td>
                        <td>
                            <a href="<?= base_url();?>pendaftaran/hapus/<?= $pdf['no_registrasi'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>pendaftaran/edit/<?= $pdf['no_registrasi'];?>"
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