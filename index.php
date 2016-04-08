<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favico.ico" type="image/x-icon" />
    <title>Jakarta Techno</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="css/tabbular.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.circliful.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/owl-carousel/owl.theme.css">
    
    <link rel="stylesheet" type="text/css" href="css/wow.css">
    
    <!--end of page level css-->
    
    <style>
        body { padding-top: 50px; }
        
        .row { margin-top: 20px;}
        .col-md-6 p { margin-top: 20px; font-size: 1.1em;}
        .text1 p { line-height: 25px; }
        
        .thumbnail { border: none; }
        
        .mytoggle { margin-left: 43%; margin-top: 0; }
        .navbar-toggle { padding: 5px 5px 0 7px;}
        
        @media screen and (max-width: 770px ) {
            header { margin-bottom:50px; }
            .col-md-6 { margin-bottom: 30px;}
            .galeri img { width: 65%;  }
        }
    </style>
</head>

<body>
    <header> <!-- Header Start -->
        <?php include 'header.php' ?>
    </header> <!-- //Header End -->
    
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="images/1360x503_2.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/1360x503_3.jpg" alt="slider-image">
        </div>
    </div>
    
    <!-- Layout Section Start -->
    <div class="container">
        
        <!-- What we are section Start -->
        <div class="row">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6 text1">
                <div class="text-left">
                    <div>
                        <a href="retailComputerized.php"><h4 class="border-warning wow bounceInDown"><span class="heading_border bg-warning">Lab Bahasa Computerized</span></h4></a>
                    </div>
                </div>
                <img src="images/610x292_1.jpg" class="img-responsive wow slideInLeft">
                <p class="wow fadeInDown">
                     Lab bahasa Computerized merupakan perpaduan antara lab bahasa digital dengan teknologi komputerisasi yang lebih canggih. Jika pada lab bahasa digital hanya terdapat hardware – hardware digital sederhana, maka pada tipe lab ini digantikan dengan hardware yang mendukung software – software modern, untuk interaksinya ada 3 model, yaitu bisa menggunakan komputer guru dan komputer siswa, komputer guru dan tablet siswa, serta tablet guru dan tablet siswa.
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6 text2">
                <div class="text-left">
                    <div>
                        <a href="retailDigital.php"><h4 class="border-success wow bounceInDown"><span class="heading_border bg-success">Lab Bahasa Digital</span></h4></a>
                    </div>
                </div>
                <img src="images/610x292_2.jpg" class="img-responsive wow slideInRight">
                <p class="wow fadeInDown">
                    Lab bahasa digital merupakan lab bahasa yang menggunakan microcontroller untuk mengatur fungsi-fungsi lab bahasa. Sedangkan fungsi – fungsi dari microcontroller tersebut dapat diatur menggunakan software yang telah disediakan, sebagai contoh beberapa fungsi yang dapat diatur dalam software tersebut adalah mengatur jumlah siswa dalam satu ruangan, membentuk kelompok dari beberapa siswa, membuat kuis beserta kunci jawabannya, dan masih banyak lagi fungsi yang lainnya. Untuk interaksinya diperlukan student panel dan master teacher panel, master control keyboard, dan software, serta perangkat pendukung lainnya.
                </p>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->
        
        <!-- Our Galeri Start -->
        <div class="row text-center galeri">
            <h3 class=" border-danger wow bounceInUp"><span class="heading_border bg-danger">Our Galeri</span></h3>
            <div class="col-md-3 col-sm-5 profile wow fadeInDown">
                <div class="thumbnail bg-white">
                    <img src="images/320x213_1.jpg" alt="team-image" class="img-responsive">
                </div>
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInDown">
                <div class="thumbnail bg-white">
                    <img src="images/320x213_2.jpg" alt="team-image" class="img-responsive">
                </div>
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInDown">
                <div class="thumbnail bg-white">
                    <img src="images/320x213_3.jpg" alt="team-image" class="img-responsive">
                </div>
            </div>
            <div class="col-md-3 col-sm-5 profile wow fadeInDown">
                <div class="thumbnail bg-white">
                    <img src="images/320x213_4.jpg" alt="team-image" class="img-responsive">
                </div>
            </div>
            
        </div>
        <!-- //Our Galeri End -->
        
    </div>
    <!-- //Container End -->

    <?php include 'footer.php' ?>
    
    <!--global js starts-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/livicons-1.4.min.js"></script>
    <script type="text/javascript" src="js/josh_frontend.js"></script>
    <!--global js end-->
    <!-- page level js starts-->
    <script type="text/javascript" src="js/jquery.circliful.js"></script>
    <script type="text/javascript" src="vendors/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <!--page level js ends-->
    
    <script>
       new WOW().init();
    </script>
</body>

</html>
