
<div class="jumbotron" style="background-color: rgb(93, 29, 14);width: 100%;height: auto">
  <div class="container">
    <h2  class="bounceInDown">Now Playing</h2>
    <div class="row" style="margin-top:60px">
    <?php
       foreach ($tampil_film as $film) {
    ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="<?=base_url()?>aset/Img/<?=$film->gambar_film;?>">
          <div class="caption">
            <h3 style="text-align:center"><?=$film->judul_film;?></h3>
            <a href="<?=base_url()?>index.php/website/detail_film/<?=$film->id_film?>"><button class="f3">Detail</button></a>
            <h4 style="float: right">Show :   <?=$film->jam1;?> | <?=$film->jam2;?> | <?=$film->jam3;?></h4>
          </div>
        </div>
      </div>
      <?php
         }
      ?>
    </div>
  </div>
</div>
