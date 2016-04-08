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
        
        .btn { margin-right:10px;}
        .contact { margin:20px 20px 50px 20px; }
        .contactIMG { margin-top:10%; }
        .notif { text-align="center"; margin-top:40px; margin-left:47%; font-weight:bold;}
        .success { color:green; }
        .fail { color:red;}
        
        @media screen and (max-width: 770px ) {
            header { margin-bottom:50px; }
        }
    </style>
</head>

<body>
    <header> <!-- Header Start -->
        <?php include 'header.php' ?>
    </header> <!-- //Header End -->
    
    <?php
        if (isset($_REQUEST['email']))  {
            $admin_email = 'sales@jakartatechno.com'; 
//          $admin_email = 'matadew4@gmail.com'; 
            $name        = $_POST['name'];
            $email       = $_POST['email'];
            $message     = $_POST['message'];
            $subject     = 'Message from ' .$name; 
    
            $to=$admin_email;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

            // More headers
            $headers .= 'From: '. $email . "\r\n" . 'Reply-To: '.$name.' <'.$email.'>' ;
            
            @mail($to,$subject,$message,$headers);
            echo '<div class="notif">';
            if(@mail)
                echo "<div class='success'>Email sent successfully !!</div>";	
            else
                echo "<div class='fail'>Sory, we have problem to sent your email....try again in a few minutes !!</div>";	  
            echo '</div>';
        }
    ?>
    
    <div class="container contact">
        <div class="col-md-6 col-md-offset-1">
            <h2>Contact Form</h2>
            <form method="post" class="contact">
                <div class="form-group">
                    <input type="text" name="name" class="form-control input-lg" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control input-lg" placeholder="Your email address" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control input-lg no-resize" name="message" rows="6" placeholder="Your questions" required></textarea>
                </div>
                
                <div class="input-group">
                    <button class="btn btn-danger">cancel</button>
                    <button class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div> <!-- //Container End -->

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
