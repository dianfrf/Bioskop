<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url() ?>aset/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>aset/style.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>aset/animate.css" type="text/css">
    <script src="<?= base_url() ?>aset/js/jquery-3.2.1.js"></script>
    <script src="<?= base_url() ?>aset/js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url() ?>aset/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>aset/js/bootstrap.min.js"></script>
    <title>Cinema XXIII</title>
  </head>
  <body data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#nduwur"><img src="<?= base_url() ?>aset/Img/mar.png" class="img-circle"></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url();?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="<?=base_url()?>index.php/website/tm_film"><span class="glyphicon glyphicon-film"></span> Schedule</a></li>
            <li><a href="<?=base_url();?>index.php/website/kritik"><span class="glyphicon glyphicon-user"></span> Kritik Saran</a></li>
            <li><a href="<?=base_url();?>index.php/pesanan"><span class="glyphicon glyphicon-book"></span> Riwayat</a></li>
            <li>
              <a href="<?=base_url()?>index.php/cart">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span class="label label-danger"><?= $this->cart->total_items(); ?></span>
              </a>
            </li>
          </ul>
          <?php
            if ($this->session->userdata("login") == true) {
              echo "<ul class='nav navbar-nav navbar-right'>
                <li> <a href='#'>".$_SESSION['nama_lengkap']."</a> </li>
                <li><a href=".base_url()."index.php/website/logout>Logout</a></li>
              </ul>";
            }
            else {
              echo "<ul class='nav navbar-nav navbar-right'>
                <li> <a href=".base_url()."index.php/website/login>Login</a></li>
                <li><a href=".base_url()."index.php/website/register>Daftar</a></li>
              </ul>";
            }
           ?>
          </div>
        </div>
      </nav>

        <?php
          $this->load->view($konten);
        ?>

      <div class="page-footer">
        <p style="color: white; text-align:center;padding-top:40px">Copyright &copy; 2018 - Dian Fakhrul Arif. All rights reserved</p>
      </div>

    <script type="text/javascript">

        $(function(){
        var navigasi = $('.navbar-default').offset().top;
        var sticky  = function(){
        var srolltop = $(window).scrollTop();
        if(srolltop > navigasi)
        {
          $('.navbar-default').addClass('fixed');
        }else
        {
          $('.navbar-default').removeClass('fixed');
        }
        };
        sticky();
        $(window).scroll(function(){
        sticky();
        });
        });

        $('body').scrollspy({ target: '#bs-example-navbar-collapse-1' })
        $('[data-spy="scroll"]').each(function () {
          var $spy = $(this).scrollspy('refresh')
        })

        $(document).ready(function() {
          $("a").on('click', function(event) {
            if(this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;
              $('html,body').animate( {
                scrollTop: $(hash).offset().top
              }, 800, function() {
                window.location.hash = hash;
              });
            }
          });
        });

        $(window).scroll(function() {
          if ($(window).scrollTop() + 600 >= $(".satu").offset().top) {
            $(".satu").css("opacity", "1").addClass("slideInDown");
          }
        });

        $(window).scroll(function() {
          if ($(window).scrollTop() + 450 >= $(".dua").offset().top) {
            $(".dua").css("opacity", "1").addClass("zoomInDown");
          }
        });

        $(window).scroll(function() {
          if ($(window).scrollTop() + 390 >= $(".empat").offset().top) {
            $(".empat").css("opacity", "1").addClass("jackInTheBox");
          }
        });

        $(window).scroll(function() {
          if ($(window).scrollTop() + 390 >= $(".lima").offset().top) {
            $(".lima").css("opacity", "1").addClass("zoomInUp");
          }
        });

    </script>
  </body>
</html>
