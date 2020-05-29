          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Pengeluaran Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data Pengeluaran Obat<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>pengeluaranobat/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID Pengeluaran</th>
                        <th>No Terima Obat</th>
                        <th>No Rekam Medis</th>
                        <th>Nama Pasien</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Dosis Aturan Obat</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Tanggal Serah Obat</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_pengeluaran_obat as $plo):?>
                    <tr>
                        <td><?= $plo['id_pengeluaran']?></td>
                        <td><?= $plo['no_terima_obat']?></td>
                        <td><?= $plo['no_rekamedis']?></td>
                        <td><?= $plo['nama_pasien']?></td>
                        <td><?= $plo['kode_obat']?></td>
                        <td><?= $plo['nama_obat']?></td>
                        <td><?= $plo['jenis_obat']?></td>
                        <td><?= $plo['dosis_aturan_obat']?></td>
                        <td><?= $plo['jumlah']?></td>
                        <td><?= $plo['satuan']?></td>
                        <td><?= $plo['tgl_serah_obat']?></td>
                        <td>
                            <a href="<?= base_url();?>pengeluaranobat/hapus/<?= $plo['id_pengeluaran'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>pengeluaranobat/edit/<?= $plo['id_pengeluaran'];?>"
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