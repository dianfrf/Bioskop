<head>
    <link rel="stylesheet" href="<?= base_url() ?>aset/tiket.css" type="text/css">
    <title>Cinema XXIII</title>
</head>
<div class="page-header">
  <h2>Data Bukti</h2>
  <div class="container" style="padding:40px">
    <?php
    if($this->session->flashdata('pesan')): ?>
    <div class="alert alert-success"><?=$this->session->flashdata('pesan');?></div> <?php endif ?>
    <form action="<?=base_url('index.php/cart/proses_upload/'.$this->uri->segment(3))?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_nota" value="<?=$id_nota?>">
      <input type="file" name="bukti" class="form_control">
      <br>
      <input type="submit" name="upload" value="Upload Bukti Pembayaran" class="f3">
    </form>
  </div>
</div>
