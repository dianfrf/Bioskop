<head>
    <link rel="stylesheet" href="<?= base_url() ?>aset/tiket.css" type="text/css">
    <title>Cinema XXIII</title>
</head>
<div class="page-header">
  <h2>Riwayat</h2>
  <div class="container">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>No</th>
            <th>No Nota</th>
            <th>Grandtotal</th>
            <th>Status</th>
            <th>Konfirm</th>
          </tr>
          <?php
          $no = 0;
          foreach ($pesanan as $psn): $no++; ?>
            <tr>
              <td><?=$no?></td>
              <td><?=$psn->id_nota?></td>
              <td><?=$psn->grandtotal?></td>
              <td>
                <?php
                if ($psn->bukti == false): ?>
                  <?=$psn->status = ""?>
                <?php else: ?> <?=$psn->status = "Clear"?>
                <?php endif ?>
              </td>
              <td>
                <?php
                if ($psn->bukti == false): ?>
                    <a href="<?=base_url('index.php/cart/konfirm/'.$psn->id_nota)?>" style="text-decoration:none">Konfirmasi</a> |
                    <a href="<?=base_url('index.php/pesanan/hapus/'.$psn->id_nota)?>" style="text-decoration:none">Batalkan</a>
                <?php else: ?> Lunas
                <?php endif ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
  </div>
</div>
