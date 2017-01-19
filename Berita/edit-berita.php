<?php

    require_once '../core/init-2.php';
    // Metode Insert //
    if(input::get('edit_id'))
    {

      $id = input::get('edit_id');
    }

    if (input::get('posting')) {

        // proses update data biodata
        $judul = input::get('judul');
        $isi = input::get('post');
        $kategori = input::get('kategori');

        // update data via method
        $berita->updateberita($id,$judul,$isi,$kategori);
        header('location: tampil-berita.php');
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
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                          <div class="row">
               				       <p class="p">Tulis Sebuah Berita Real</p>
                             <input type="text" name="judul" class="judul" placeholder="  Masukan Judul" value="<?php echo $berita->editberita('judul_berita',$id) ?>"><br/>
               				       <select name="kategori" class="judul">
                               <option disabled selected>-- Pilih Kategori --</option>
                              <?php

                                $show = $berita->showkategori('kategori','id_kategori');
                                while($data = $show->fetch_object()){

                              ?>
                                <option value="<?php echo $data->id_kategori ?>"><?php echo $data->judul_kategori ?></option>
                              <?php
                                }
                               ?>
                             </select>
      						           <textarea name="post" id="post" class="ckeditor" cols="100" rows="20" ><?php echo $berita->editberita('isi_berita',$id) ?></textarea>

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
