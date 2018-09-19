<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 3.1
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Data Peserta</title>

    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url('assets/materialize') ?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/materialize') ?>/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?php echo base_url('assets/materialize') ?>/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="<?php echo base_url('assets/materialize') ?>/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url('assets/materialize') ?>/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS for full screen (Layout-2)-->    
    <link href="<?php echo base_url('assets/materialize') ?>/css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo base_url('assets/materialize') ?>/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url('assets/materialize') ?>/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

   

    <style>
    body {
     display: flex;
     min-height: 100vh;
     flex-direction: column;
     }
     main {
         flex: 1 0 auto;
     }

     .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    margin-left:50px;
      }

      #pac-input {
        background-color: #fff;
        padding: 0 11px 0 13px;
        width: 400px;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-overflow: ellipsis;
    margin-left:50px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
        margin-left: -1px;
        padding-left: 14px;
        width: 401px;
    margin-left:50px;
      }
  </style>

</head>

<body>
    <!-- Start Page Loading -->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

<?php $this->load->view('public/header');?>

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <main>
            <section id="content">

                    <div id="work-collections">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <ul id="projects-collection" class="collection">
                                  <li class="collection-item avatar">
                                    <span class="collection-header">
                                    <i class="mdi-editor-border-all circle light-blue darken-2"></i>Data Peserta
                                    <hr>
                                    </span>
                                  </li>

                                
                                 
                                  <li class="collection-item">
                                    <a class="waves-effect waves-light btn modal-trigger  light-blue" href="#modal1">Tambah Peserta</a><br><br>
                                     <table id="t_data" width="100%">
                                       <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Nama</th>
                                              <th>NIK</th>
                                              <th>HP</th>
                                              <th>Email</th>
                                              <th>Skema Sertifikasi</th>
                                              <th>Tempat</th>
                                              <th>Rekomendasi</th>
                                              <th>Tanggal Terbit Sertifikat</th>
                                              <th>Tanggal Lahir</th>
                                              <th>Organisasi</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
                                          $x=0;
                                          foreach($peserta as $p){?>
                                            <tr>
                                              <td><?php echo $x+1?></td>
                                              <td><?php echo $p["nama"];?></td>
                                              <td><?php echo $p["nik"];?></td>
                                              <td><?php echo $p["hp"];?></td>
                                              <td><?php echo $p["email"];?></td>
                                              <td><?php echo $p["skema_sertifikasi"];?></td>
                                              <td><?php echo $p["tempat_uji_kompetensi"];?></td>
                                              <td><?php echo $p["rekomendasi"];?></td>
                                              <td><?php echo $p["tanggal_terbit_sertifikat"];?></td>
                                              <td><?php echo $p["tanggal_lahir"];?></td>
                                              <td><?php echo $p["organisasi"];?></td>
                                            </tr>
                                          <?php 
                                          $x++;
                                        } ?>
                                        </tbody>
                                        </table>
                                        </li>
                                </ul>

                                <br>
                            </div>

                        </div>
                    </div>
                    
                    </section>
  </main>
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="container">
                <div class="col l4 offset-l2 s12">
                    <p class="grey-text text-lighten-4">2018 @ SKKNI</p>
                </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    
    </div>


      <div id="modal1" class="modal">
                <form action="<?php echo site_url('Info/tambah_peserta') ?>" method="post">
                  <div class="modal-content">
                    <b>TAMBAH PESERTA</b><hr>            

                    <div class="row">
                     <div class="input-field col s12">
                          <input id="nama" name="nama" type="text" class="validate" required 
                          oninvalid="this.setCustomValidity('Nama terdiri dari huruf dan tidak boleh kosong')"
                          oninput="setCustomValidity('')"
                          > 
                          <label for="nama">Nama</label>
                      </div>
                    </div>

                    <div class="row">
                       <div class="input-field col s12">
                          <input id="nik" name="nik" type="text" class="validate" required pattern="[0-9]{16}"
                          oninvalid="this.setCustomValidity('Input NIK terdiri dari 16 digit angka dan tidak boleh kosong')"
                          oninput="setCustomValidity('')"
                          >
                          <label for="nik">NIK</label>
                        </div>
                    </div>

                    <div class="row">
                     <div class="input-field col s12">
                          <input id="hp" name="hp" type="text" class="validate" required pattern="[0-9]{10,12}" 
                          oninvalid="this.setCustomValidity('Nomor HP terdiri dari angka dan tidak boleh kosong')"
                          oninput="setCustomValidity('')">
                          <label for="hp">HP</label>
                      </div>
                    </div>

                    <div class="row">
                       <div class="input-field col s12">
                          <input id="email" name="email" type="email" class="validate" required 
                          oninvalid="this.setCustomValidity('Email harus menyertakan tanda @, extensi .com dan tidak boleh kosong')"
                          oninput="setCustomValidity('')">
                          <label for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                      <!-- input pilihan operasi matematik -->
                        <select name="skema">
                          <option value="Pemrograman" selected>Pemrograman</option>
                          <option value="Multimedia">Multimedia</option>
                          <option value="Jaringan">Jaringan</option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s6">
                      <!-- input pilihan operasi matematik -->
                        <select name="rekomendasi">
                          <option value="Kompeten" selected>Kompeten</option>
                          <option value="Belum Kompeten">Belum Kompeten </option>
                        </select>
                      </div>
                    </div>

                    <div class="row">
                       <div class="input-field col s12">
                          <input id="tanggal_terbit_sertifikat" name="tanggal_terbit_sertifikat" type="date" required
                          oninvalid="this.setCustomValidity('Tanggal terbit sertifikat tidak boleh kosong')"
                          oninput="setCustomValidity('')">
                          
                        </div>
                    </div>

                    <div class="row">
                       <div class="input-field col s12">
                          <input id="tanggal_lahir" name="tanggal_lahir" type="date" required 
                          oninvalid="this.setCustomValidity('Tanggal lahir tidak boleh kosong')"
                          oninput="setCustomValidity('')">
                        </div>
                    </div>

                    <div class="row">
                       <div class="input-field col s12">
                          <input id="organisasi" name="organisasi" type="text" class="validate" required
                           oninvalid="this.setCustomValidity('Organisasi tidak boleh kosong')"
                          oninput="setCustomValidity('')"
                          >
                          <label for="Organisasi">Organisasi</label>
                        </div>
                    </div>
                                        
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="waves-effect waves-red btn-flat modal-action">Submit</button>
                  </div>
                </form>
                </div>


    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline --> 
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script> -->
   <!--  <script type="text/javascript" src="//maps.google.com/maps/api/js?v=3&key=AIzaSyBRUEbUSEYDDmFFlmySh-wJhXfzJNi9hrQ&callback=initialize&sensor=false&libraries=places"></script> -->
    <script type="text/javascript" src="//rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script>
    <!--jvectormap-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/jvectormap/vectormap-script.js"></script>        
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/custom-script.js"></script>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/materialize') ?>/js/plugins/data-tables/data-tables-script.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBRUEbUSEYDDmFFlmySh-wJhXfzJNi9hrQ"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <!-- Toast Notification -->
    <script>
      var table = $('#t_data').DataTable();
      
    </script>
    <script>

     

    </script>
</body>

</html>