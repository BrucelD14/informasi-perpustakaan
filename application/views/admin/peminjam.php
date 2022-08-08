<div class="section-body">
  <div class="row">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
      <div class="card">
        <div class="card-header">
          <h4>Daftar Peminjam Buku</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Tanggal Pinjam</th>
                  <th>Judul buku</th>
                  <th>Nama Peminjam</th>
                  <th>email</th>
                  <th>alamat</th>
                  <th>hp</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                <td><?php echo $no++ ?></td>
                  <td><?php echo htmlentities($data->tgl_pinjam, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->judul, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->alamat, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->hp, ENT_QUOTES, 'UTF-8');?></td>
                  <td><a href="<?php echo base_url('admin/hapus_peminjam/'.$data->id) ?>" class=" btn btn-danger btn-del">Hapus</a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>