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

    <!-- NAVBAR -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('/login') ?>"><i class="fa fa-sign-in"></i> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR -->

    <div class="__wrappol">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="__heading">
              <h1>Vooting Jadwal Pelaksanaan Belajar Bersama FTI UMBY</h1>
              <h3>ITDev Adalah Group/Team Belajar Yang Dilaksakan di Kampus <br> Universitas Mercu Buana Yogyakarta</h3>
              <a href="<?php echo base_url('/login') ?>" type="button" class="btn btn-voting btn-lg" name="button">Berikan Vooting</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
