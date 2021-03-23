<?php 
session_start();
//koneksi ke database
include 'koneksi.php';


if(!isset($_SESSION['mahasiswa']))
    {
        echo "<script>alert('anda harus login');</script>";
        echo "<script>location='login.php';</script>";
        header('location:login.php');
        exit();
    }

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="icon" type="image/png" href="assets/img/himatif.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Himatif : Himpunan Mahasiswa Teknologi Informasi Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">H I M A T I F</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><img src="../foto_mahasiswa/<?php echo $_SESSION['mahasiswa']['foto_mahasiswa'] ?>" class="img-circle" width="40px">&nbsp&nbsp<?php echo $_SESSION['mahasiswa']['nama']  ?> &nbsp<a href="index.php?halaman=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <a href="index.php"><img src="assets/img/himatif.png" class="user-image img-responsive"/></a>
					</li>
				
					
                    <li><a href="index.php"><i class="glyphicon glyphicon-home fa-2x"></i>Home</a></li>
                    <li><a href="index.php?halaman=kegiatan"><i class="fa fa-rocket fa-2x"></i> Kegiatan</a></li>
                    <li><a href="index.php?halaman=dash_kuisioner"><i class="glyphicon glyphicon-list-alt fa-2x"></i> Kuisioner</a></li>
                    <li><a href="index.php?halaman=uangkas"><i class="glyphicon glyphicon-usd fa-2x"></i> Uang Kas</a></li>
                    <li><a href="index.php?halaman=pengumuman"><i class="glyphicon glyphicon-paperclip fa-2x"></i>Pengumuman</a></li>
                     <li><a href="index.php?halaman=periode"><i class="glyphicon glyphicon-stats fa-2x"></i> Periode</a></li>
                     <li><a href="index.php?halaman=mahasiswa"><i class="glyphicon glyphicon-user fa-2x"></i>Mahasiswa</a></li>
                      <!-- <li><a href="index.php?halaman=penduduk"><i class="glyphicon glyphicon-user fa-2x"></i>Penduduk</a></li> -->
                     <!-- <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li> -->	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="kegiatan")
                    {
                        include 'kegiatan.php';
                    }
                    elseif ($_GET['halaman']=="kuisioner")
                    {
                        include 'kuisioner.php';
                    }
                    elseif ($_GET['halaman']=="uangkas")
                    {
                        include 'uangkas.php';
                    }
                    elseif ($_GET['halaman']=="tambahkegiatan")
                    {
                        include 'tambahkegiatan.php';
                    }
                    elseif ($_GET['halaman']=="pengumuman")
                    {
                        include 'pengumuman.php';
                    }
                     elseif ($_GET['halaman']=="hapuspengumuman")
                    {
                        include 'hapuspengumuman.php';
                    }
                    elseif ($_GET['halaman']=="ubahpengumuman")
                    {
                        include 'ubahpengumuman.php';
                    }
                    elseif ($_GET['halaman']=="tambahpengumuman")
                    {
                        include 'tambahpengumuman.php';
                    }
                    elseif ($_GET['halaman']=="hapuskegiatan")
                    {
                        include 'hapuskegiatan.php';
                    }
                    elseif ($_GET['halaman']=="ubahkegiatan")
                    {
                        include 'ubahkegiatan.php';
                    }
                     elseif ($_GET['halaman']=="viewkegiatan")
                    {
                        include 'viewkegiatan.php';
                    }
                     elseif ($_GET['halaman']=="hapuskuisioner")
                    {
                        include 'hapuskuisioner.php';
                    }
                     elseif ($_GET['halaman']=="tambahkuisioner")
                    {
                        include 'tambahkuisioner.php';
                    }
                     elseif ($_GET['halaman']=="ubahkuisioner")
                    {
                        include 'ubahkuisioner.php';
                    }
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                     elseif ($_GET['halaman']=="periode")
                    {
                        include 'periode.php';
                    }
                     elseif ($_GET['halaman']=="mahasiswa")
                    {
                        include 'mahasiswa.php';
                    }
                    elseif ($_GET['halaman']=="ubahperiode")
                    {
                        include 'ubahperiode.php';
                    }
                    elseif ($_GET['halaman']=="hapusperiode")
                    {
                        include 'hapusperiode.php';
                    }
                     elseif ($_GET['halaman']=="tambahperiode")
                    {
                        include 'tambahperiode.php';
                    }
                     elseif ($_GET['halaman']=="tambahmahasiswa")
                    {
                        include 'tambahmahasiswa.php';
                    }
                     elseif ($_GET['halaman']=="ubahmahasiswa")
                    {
                        include 'ubahmahasiswa.php';
                    }
                    elseif ($_GET['halaman']=="viewmahasiswa")
                    {
                        include 'viewmahasiswa.php';
                    }
                    elseif ($_GET['halaman']=="hapusmahasiswa")
                    {
                        include 'hapusmahasiswa.php';
                    }
                     elseif ($_GET['halaman']=="detailkuisioner")
                    {
                        include 'detailkuisioner.php';
                    }
                     elseif ($_GET['halaman']=="dash_kuisioner")
                    {
                        include 'dash_kuisioner.php';
                    }
                     elseif ($_GET['halaman']=="hapusuangkas")
                    {
                        include 'hapusuangkas.php';
                    }
                     elseif ($_GET['halaman']=="ubahuangkas")
                    {
                        include 'ubahuangkas.php';
                    }
                    elseif ($_GET['halaman']=="tambahuangkas")
                    {
                        include 'tambahuangkas.php';
                    }
                    elseif ($_GET['halaman']=="pencarian")
                    {
                        include 'pencarian.php';
                    }
                    elseif ($_GET['halaman']=="detailuang")
                    {
                        include 'detailuang.php';
                    }
                    elseif ($_GET['halaman']=="carikegiatan")
                    {
                        include 'carikegiatan.php';
                    }
                    elseif ($_GET['halaman']=="viewpengumuman")
                    {
                        include 'viewpengumuman.php';
                    }
                    elseif ($_GET['halaman']=="detailperiode")
                    {
                        include 'detailperiode.php';
                    }
                    elseif ($_GET['halaman']=="tambahpengurus")
                    {
                        include 'tambahpengurus.php';
                    }
                    elseif ($_GET['halaman']=="hapusbph")
                    {
                        include 'hapusbph.php';
                    }
                    // elseif ($_GET['halaman']=="penduduk")
                    // {
                    //     include 'penduduk.php';
                    // }      



                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
