<!DOCTYPE html>
<html>
<header>
    <style>
        header { background: #000;}
        header img { margin-top: 20px;}
        
        .navbar { background: #000;}       
        .nav a { color:#ff0000; font-weight: bold;}
        .navbar-default .navbar-nav>li>a { color: #fff; }
        
        .text1 p { line-height: 25px; }
        
        .thumbnail { border: none; }
        
        .mytoggle { margin-left: 43%; margin-top: 0; }
        .navbar-toggle { padding: 5px 5px 0 7px;}
    </style>
</header>
    
<body>
    <nav class="navbar navbar-default navbar-fixed-top "> <!-- Nav bar Start -->
        <div class="container">
            <div class="navbar-header">
            <div class="col-sm-9">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo_position img-responsive"></a>
            </div>

            <div class="row col-sm-3 mytoggle pull-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> 
                        <i class="livicon" data-name="responsive-menu" data-size="15" data-loop="true" data-c="#757b87" data-hc="#000"></i>
                    </a></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"> Home</a>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Produk</a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="retailComputerized.php">Lab Bahasa Computerized</a></li>
                        <li><a href="retailDigital.php">Lab Bahasa Digital</a></li>
                        <li><a href="aksesoris.php">Aksesoris</a></li>
                    </ul>
                </li>
                <li><a href="contact.php"> Contact Us</a></li>
            </ul>
        </div>
        </div>
    </nav> <!-- Nav bar End -->
</body>
