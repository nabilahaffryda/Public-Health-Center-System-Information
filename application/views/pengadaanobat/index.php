          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Pengadaan Obat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <?php if($this->session->flashdata('flash-data')):?>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Data Pengadaan Obat<strong> Success</strong> <?=$this->session->flashdata('flash-data');?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                  <div class="col-md-6">
                    <a href="<?= base_url();?>pengadaanobat/tambah" class="btn btn-primary">Tambah Data</a>           
                  </div>&nbsp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID Pengadaan</th>
                        <th>No Transaksi</th>
                        <th>Kode Supplier</th>
                        <th>Kode Obat</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Harga Beli</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Keterangan</th>
                        <th>Total</th>
                        <th>Tanggal Transaksi</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tbl_pengadaan_obat as $pdo):?>
                    <tr>
                        <td><?= $pdo['id_pengadaan']?></td>
                        <td><?= $pdo['no_trans']?></td>
                        <td><?= $pdo['kode_supplier']?></td>
                        <td><?= $pdo['kode_obat']?></td>
                        <td><?= $pdo['nama_obat']?></td>
                        <td><?= $pdo['jenis_obat']?></td>
                        <td><?= $pdo['harga_beli']?></td>
                        <td><?= $pdo['jumlah']?></td>
                        <td><?= $pdo['satuan']?></td>
                        <td><?= $pdo['keterangan']?></td>
                        <td><?= $pdo['total']?></td>
                        <td><?= $pdo['tgl_transaksi']?></td>
                        <td>
                            <a href="<?= base_url();?>pengadaanobat/hapus/<?= $pdo['id_pengadaan'];?>"
                                class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data ini akan dihapus?');">Hapus</a> 
                            <a href="<?= base_url();?>pengadaanobat/edit/<?= $pdo['id_pengadaan'];?>"
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