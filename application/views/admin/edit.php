<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Input data Barang</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url()?>page/edit" method="post">
          <div class="form-group">
            <input type="hidden" value="<?php echo $hasil->id;?>" name="id">
            <label>Nama Barang</label>
            <input type="text" name="nama" value="<?php echo $hasil->nama;?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label>tanggal masuk</label>
            <input type="date" name="tgl" value="<?php echo $hasil->tgl_masuk;?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label>jumlah</label>
            <input type="number" name="jumlah" value="<?php echo $hasil->jumlah;?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Kondisi Barang</label>
            <select class="form-control" name="kondisi">
              <?php
              if($hasil->kondisi == 1){
                echo'<option value="1">Baik</option>
                <option value="2">Kurang Baik</option>';
              }else{
                echo'<option value="2">Kurang Baik</option>
                <option value="1">Baik</option>';
              }
              ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block my-3" tabindex="4">Simpan</button>
        </div>
          </form>
      </div>
    </div>
  </div>
</div>