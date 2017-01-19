<?php

  require_once '../core/init-2.php';

  $errors = array();

  if (input::get('posting')) {

    // 1. membuat object validasi

    $validation = new validasi();

    // 2. metode check

    $validat = $validation->check(array(
        'judul' =>  array('required' => true,
                          'min'      => 5
                          ),
        'post' => array('required' => true),
        'kategori' => array('required' => true)

      ));

    // 3. Lolos

    if ($validation->passed()) {

      $news->post(array(
                'judul_berita' => input::get('judul'),
                'id_kategori' => input::get('kategori'),
                'isi_berita' => input::get('post'),
                'id_users'  => input::get('penulis'),
                'tanggal' => date('Y-m-d',time())
      ));

    header('location: tampil-berita.php');
    }else{
      echo "<script>alert('Gagal Menyimpan Berita')</script>";
      $errors = $validation->errors();
    }
  }

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tulis Berita</title>
        <meta http-equiv="Content-Type" content="width=device-width initial-scale=1.0"/>
        <link rel="stylesheet" href="../lib/css/css/bootstrap.min.css">

        <link rel="stylesheet" href="../administrator/admin/style.css">
        <!-- Custom Fonts -->
        <link href="../lib/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- MetisMenu CSS -->
        <link href="../lib/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../lib/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../lib/vendor/morrisjs/morris.css" rel="stylesheet">

        <script src="../lib/css/js/jquery.min.js"></script>
        <script src="../lib/css/Highcharts/code/highcharts.js"></script>
        <script src="../lib//css/js/style.js"></script>
        <script src="../lib/css/js/ckeditor/ckeditor.js"></script>

        <script src="../lib/css/js/ckeditor/style.js"></script>

  </head>

  <body>

    <div class="container-fluid bg-admin">

        <div class="row">

          <!-- Sidebar -->

            <div class="col-sm-2">

                <div class="row">

                        <?php require_once '../template/sid-brt.php'; ?>

                </div> <!-- End Row -->

            </div><!-- End Col -->

            <div class="col-sm-10 bg-cont">

            <!-- Header -->

                <div class="row">

                        <?php require_once '../template/hed-nav-admin.php'; ?>
                </div>

            <!-- Content Main -->

                  <div class="content" align="center">
                    <form action="post-berita.php" method="POST">
                          <div class="row">
               				       <p class="p">Tulis Sebuah Berita Real</p>
                             <input type="text" name="judul" class="judul" placeholder="  Masukan Judul"><br/>
               				       <select name="kategori" class="judul">
                              <option selected disabled>-- Pilih Kategori --</option>
                              <?php

                                $show = $berita->showkategori('kategori','id_kategori');
                                while($data = $show->fetch_object()){

                              ?>
                                <option value="<?php echo $data->id_kategori ?>"><?php echo $data->judul_kategori ?></option>
                              <?php
                                }
                               ?>
                             </select>
                             <!-- <input type="text" name="penulis" class="judul" value="<?php # $berita->_SESSION ?>"> -->
      						           <textarea name="post" id="post" class="ckeditor" cols="100" rows="20" ></textarea>

                             <script type=”text/javascript”>
                              //<![CDATA[
                              CKEDITOR.replace( 'post',
                              {
                                fullPage : true,
                                extraPlugins : 'docprops'
                              });
                              //]]>
                              </script>

                        	</div> <!-- End Content Main -->

                        <input type="submit" class="btn btn-primary" value="POSTING" name="posting">
                        <input type="reset" class="btn btn-primary" value="BESRIHKAN" name="reset">
                    </form>
                  </div><!-- End Content -->

            <!-- Footer -->

                <div class="row">

                    <div class="footer">
                        &copy Beritahukan.Com
                    </div>

                </div>  <!-- footer -->

            </div> <!-- col-sm-10 -->

        </div> <!-- End Row -->

    </div>

        <script src="../lib/css/js/jquery.min.js"></script>
        <script src="../lib/css/js/bootstrap.min.js"></script>

    </body>
</html>
