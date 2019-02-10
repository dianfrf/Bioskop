
<head>
    <link rel="stylesheet" href="<?= base_url() ?>aset/tiket.css" type="text/css">
    <title>Cinema XXIII</title>
</head>
        <div class="page-header">
        	<h2>Beli Tiket</h2>
        	<div class="container">
        		<div class="col-sm-8 col-md-8">
        			<h3><?=$detail->judul_film;?></h3>
        			<h5><?=$detail->nama_kategori?></h5>
        			<div class="table-responsive">
                        <table class="table">
                            <tr>
                	           <td>Harga</td>
                	           <td>Rp 45.000</td>
                            </tr>
                            <tr>
                	           <td>Ruang</td>
                	           <td><?=$detail->studio;?></td>
                            </tr>
                            <tr>
                	           <td><a href="<?=base_url('index.php/website/kursi')?>" style="text-decoration:none; color: black">Kursi</a></td>
                            </tr>
                            <tr>
                	           <td>Sinopsis</td>
                	           <td style="text-align: justify"><?=$detail->sinopsis;?></td>
                            </tr>
                        </table>
                        <a href="<?=base_url($url)?>"><button class="f3"><?= $pesan; ?></button></a>
                    </div>
        		</div>
        		<div class="col-sm-4 col-md-4">
        			<div class="thumbnail"><img src="<?=base_url()?>aset/Img/<?=$detail->gambar_film?>"></div>
        		</div>
        	</div>
        </div>
