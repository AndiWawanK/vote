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

    <!-- LOGIN -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="well login-box">
            <form action="<?php echo base_url('login/login') ?>" method="post">
              <legend>Login</legend>
                <div class="form-group">
                  <label for="nim">NIM (No Induk Mahasiswa)</label>
                  <input type="text" name="nim" class="form-control" placeholder="NIM (No Induk Mahasiswa)">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group text-center">
                  <input type="submit" class="btn btn-loginvoting btn-login-submit" value="Login" />
                </div>
            </form>
            <?php if($response != ''){ ?>
              <div class="alert alert-danger">
                <?php echo $response ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!-- LOGIN -->

    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
