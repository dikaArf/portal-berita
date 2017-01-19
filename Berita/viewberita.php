<?php

    require_once '../core/init-2.php';

    if(input::get('view_id'))
    {

      $id = input::get('view_id');
    }
    $show = $berita->viewberitas('berita','id_berita');
    if($row = $show->fetch_object()){

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $row->judul_berita ?></title>
  </head>
  <body>
    <h2><?php echo $row->judul_berita ?></h2>
    <img class="img-circle" src="" alt="" width="140" height="140" style="boder:1px solid #000">
    <p><?php echo $row->isi_berita ?></p>
    <br>
    <br>
    <h5 style="float:right;">Dipubliaksikan Pada = <?php echo $row->tanggal ?></h5>
  </body>
</html>

<?php
  }
?>
