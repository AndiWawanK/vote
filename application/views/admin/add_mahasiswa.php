<div class="panel panel-default">
    <div class="panel-heading">Tambah Data Mahasiswa</div>
    <div class="panel-body">
      <div class="col-md-6">
        <form role="form" action="<?php echo base_url('vote_a/insert_mhs') ?>" method="post">
          <div class="form-group">
            <input type="text" name="nim" class="form-control" placeholder="NIM (No Induk Mahasiswa)" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Lengkap (Optional)" disabled>
          </div>
          <div class="form-group">
            <select class="form-control" name="prodi">
              <option>--pilih prodi--</option>
              <option value="Teknik Informatika" required>Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Status" disabled>
          </div>
          <button type="submit" class="btn btn-success" name="simpan" style="width:100%;">Simpan</button>
        </form>
      </div>
    </div>
</div>
