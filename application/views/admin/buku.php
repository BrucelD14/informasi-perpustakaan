<div class="section-body">
  <div class="row">
    <div class="col-12">
    <?php echo $this->session->flashdata('msg') ?>
      <div class="card">
        <div class="card-header">
          <h4>Data cucian</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                      <?php
                        $no=1;
                        foreach($hasil as $data){
                      ?>
                <tr>
                <td><?php echo $no++?></td>
                  <td><?php echo htmlentities($data->judul, ENT_QUOTES, 'UTF-8');?></td>
                  <td><?php echo htmlentities($data->penulis, ENT_QUOTES, 'UTF-8');?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>page/detail/<?php echo $data->id;?>" target="_blank" class="btn btn-primary">Detail</a>
                    <a href="<?php echo base_url(); ?>admin/hapus_buku/<?php echo $data->id;?>" class="btn btn-danger btn-del">Hapus</a>
                  </td>
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