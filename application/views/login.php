<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=base_url()?>aset/css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>aset/login.css" type="text/css">
    <script src="<?=base_url()?>aset/js/jquery-3.2.1.js"></script>
    <script src="<?=base_url()?>aset/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>aset/js/bootstrap.js"></script>
    <script src="<?=base_url()?>aset/js/bootstrap.min.js"></script>
    <title>Login Cinema XXIII</title>
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 jarakatas">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Login Cinema XXIII</h3>
        </div>
        <div class="panel-body">
        <?php
        if($this->session->flashdata('pesan')!=null) {
        echo "<div class='alert alert-success'>".$this->session->flashdata('pesan')."</div>";}?>

        <form action="<?=base_url('index.php/website/proses_login')?>" method="post">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
          </div>
          <div class="input-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="input-group-addon"><span class="glyphicon glyphicon-qrcode"></span></span>
          </div>
          <input type="submit" class="btn btn-danger btn-lg" value="Masuk" name="login">
        </form>
        </div>
        <div class="panel-footer">
          <a href="<?=base_url('index.php/website/register')?>">Belum Punya Akun? Daftar</a>
          <h5 class="panel-title">Copyright &copy; 2018 - Dian Fakhrul Arif. All rights reserved</h5>
        </div>
      </div>
    </div>
  </body>
</html>
