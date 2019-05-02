<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Aplikasi Koperasi</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/dashboard.css')?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Aplikasi Koperasi </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="<?php if($this->uri->segment('1') == 'dashboard') { echo "active" ;} ?>">
                <a href="<?php echo base_url('dashboard') ?>">Dashboard</a></li>
            <li class="<?php if($this->uri->segment('1') == 'petugas') { echo "active" ;} ?>">
                <a href="<?php echo base_url('petugas') ?>">Petugas</a></li>
            <li class="<?php if($this->uri->segment('1') == 'anggota') { echo "active" ;} ?>">
                <a href="<?php echo base_url('anggota') ?>">Anggota</a></li>
            <li class="<?php if($this->uri->segment('1') == 'simpanan') { echo "active" ;} ?>">
                <a href="<?php echo base_url('simpanan') ?>">Simpanan</a></li>
            <li class="<?php if($this->uri->segment('1') == 'kategoti_pinjam') { echo "active" ;} ?>">
                <a href="<?php echo base_url('kategori_pinjam') ?>">Kategori Pinjam</a></li>
            <li class="<?php if($this->uri->segment('1') == 'pinjaman') { echo "active" ;} ?>">
                <a href="<?php echo base_url('pinjaman') ?>">Pinjaman</a></li>
            <li class="<?php if($this->uri->segment('1') == 'angsuran') { echo "active" ;} ?>">
                <a href="<?php echo base_url('angsuran') ?>">Angsuran</a></li>
          </ul>
 
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <!-- konten dinamis -->
          <?php $this->load->view($konten);?>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url('assets/js/vendor/holder.min.js'); ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
  </body>
</html>
