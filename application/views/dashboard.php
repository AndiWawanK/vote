<!DOCTYPE html>
<html>
  <head>
    <title>Pooling ITDev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default panel-voting">
            <div class="panel-heading">
              <h3 class="panel-title">Selamat Datang : <b style="color:#000"><?php echo $this->session->userdata("nama"); ?></b></h3>
            </div>
            <div class="panel-body">
              <div class="col-md-6">

                <form class="" action="<?php echo base_url('vote/vote_proccess/'. $this->session->userdata("nim")) ?>" method="post">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#senin" href="#senin">Senin</a>
                      </h4>
                    </div>
                    <div id="senin" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <!-- vooting -->
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="senin" value="09:00-11:00" required> Pukul <b>09:00 - 11:00</b>
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="senin" value="03:00-04:00" required> Pukul <b>03:00 - 04:00</b>
                              </label>
                            </div>
                          </li>
                        </ul>
                        <!-- vooting -->
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#selasa" href="#selasa">Selasa</a>
                      </h4>
                    </div>
                    <div id="selasa" class="panel-collapse collapse">
                      <div class="panel-body">
                        <!-- vooting -->
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="selasa" value="09:00-11:00" required> Pukul <b>09:00 - 11:00</b>
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="selasa" value="03:00-04:00" required> Pukul <b>03:00 - 04:00</b>
                              </label>
                            </div>
                          </li>
                        </ul>
                        <!-- vooting -->
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#rabu" href="#rabu">Rabu</a>
                      </h4>
                    </div>
                    <div id="rabu" class="panel-collapse collapse">
                      <div class="panel-body">
                        <!-- vooting -->
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="rabu" value="09:00-11:00" required> Pukul <b>09:00 - 11:00</b>
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="rabu" value="03:00-04:00" required> Pukul <b>03:00 - 04:00</b>
                              </label>
                            </div>
                          </li>
                        </ul>
                        <!-- vooting -->
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#kamis" href="#kamis">Kamis</a>
                      </h4>
                    </div>
                    <div id="kamis" class="panel-collapse collapse">
                      <div class="panel-body">
                        <!-- vooting -->
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="kamis" value="09:00-11:00" required> Pukul <b>09:00 - 11:00</b>
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="kamis" value="03:00-04:00" required> Pukul <b>03:00 - 04:00</b>
                              </label>
                            </div>
                          </li>
                        </ul>
                        <!-- vooting -->
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#jumat" href="#jumat">Jum'at</a>
                      </h4>
                    </div>
                    <div id="jumat" class="panel-collapse collapse">
                      <div class="panel-body">
                        <!-- vooting -->
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="jumat" value="09:00-11:00" required> Pukul <b>09:00 - 11:00</b>
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="jumat" value="03:00-04:00" required> Pukul <b>03:00 - 04:00</b>
                              </label>
                            </div>
                          </li>
                        </ul>
                        <!-- vooting -->
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#sabtu" href="#sabtu">Sabtu</a>
                      </h4>
                    </div>
                    <div id="sabtu" class="panel-collapse collapse">
                      <div class="panel-body">
                        <!-- vooting -->
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="sabtu" value="09:00-11:00" required> Pukul <b>09:00 - 11:00</b>
                              </label>
                            </div>
                          </li>
                          <li class="list-group-item">
                            <div class="radio">
                              <label>
                                <input type="radio" name="sabtu" value="03:00-04:00" required> Pukul <b>03:00 - 04:00</b>
                              </label>
                            </div>
                          </li>
                        </ul>
                        <!-- vooting -->
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" style="width:100%" class="btn btn-danger" name="vote">Vote</button>
              </form>
            </div>

              <div class="col-md-6">
                <h3>Haloo <?php echo $this->session->userdata("nama"); ?>!</h3>
                <p>Kami Ingin Mengetahui Waktu Luang Kamu Untuk Mengikuti Program Belajar
                Bersama Fakultas Teknologi Informasi Universitas Mercu Buana Yogyakarta</p><br>
                <b>Petunjuk</b>
                <ol>
                  <li>Klik Nama-Nama Hari Disamping</li>
                  <li>Centang Salah Satu Jadwal (Menurut Waktu Luang Anda)</li>
                  <li>Semua Hari Harus Dicentang Salah Satunya</li>
                  <li>Periksa Kembali Semua Jadwal Pilihan Anda</li>
                  <li>Klik Tombol <b>Vote</b> Jika Semua Jadwal Anda Sudah Benar </li>
                  <li><b>Terimah Kasih :)</b></li>
                </ol>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
