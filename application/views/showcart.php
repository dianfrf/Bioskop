<head>
    <link rel="stylesheet" href="<?= base_url() ?>aset/tiket.css" type="text/css">
    <title>Cinema XXIII</title>
</head>
<div class="page-header">
  <h2>Detail Beli</h2>
  <div class="container">
      <div class="table-responsive">
      <form action="<?=base_url('index.php/cart/simpan')?>" method="post">
        <table class="table">
          <tr>
            <th>ID Film</th>
            <th>Judul Film</th>
            <th>Kategori</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
          </tr>
          <?php
          foreach ($this->cart->contents() as $items) {
          ?>
          <tr>
            <td>
              <input type="hidden" name="id_film[]" value="<?=$items['id']?>">
              <input type="hidden" name="qty[]" value="<?=$items['qty']?>">
              <?=$items['id']?></td>
            <td><?=$items['name']?></td>
            <td><?=$items['options']['Genre']?></td>
            <td><?=$items['qty']?></td>
            <td><?=$items['price']?></td>
            <td><?=$items['subtotal']?></td>
            <td> <a href="<?=base_url('index.php/cart/hapus_item/'.$items['rowid'])?>" onclick="return confirm('Apakah yakin?')">Hapus</a> </td>
          </tr>
          <?php }?>
          <tr>
            <input type="hidden" name="grandtotal" value="<?=$this->cart->total()?>">
            <td colspan="5">Grand Total</td>
            <td><?=$this->cart->total()?></td>
          </tr>
        </table>
            <input type="submit" name="simpan" value="Checkout" class="f3">
        </form>
      </div>
  </div>
</div>
