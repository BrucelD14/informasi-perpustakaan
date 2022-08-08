<div class="section-body">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Input data Buku</h4>
        </div>
        <div class="card-body">
        <span class="text-danger"><?php echo $this->session->flashdata('msg') ?></span>
        <?php echo form_open_multipart('Admin/tambah_proses');?>
          <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Penerbit</label>
                      <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Penulis</label>
                      <input type="text" name="penulis" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tahun Terbit</label>
                      <input type="text" name="tahun" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Halaman</label>
                      <input type="number" name="halaman" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Genre</label>
                      <input type="text" name="genre" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Jumlah Buku</label>
                      <input type="number" name="jumlah" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Cover Buku</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="foto" id="customFile">
                      <label class="custom-file-label" for="customFile">Upload Gambar Cover Buku</label>
                    </div>
                    </div>
                    <div class="form-group">
                      <label">Sinopsis</label>
                        <textarea class="summernote-simple" name="sinopsis"></textarea>
                    </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block my-3" tabindex="4">Simpan</button>
        </div>
        <?php echo form_close(); ?> 
      </div>
    </div>
  </div>
</div>