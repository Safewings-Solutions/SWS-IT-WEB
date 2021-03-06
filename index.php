<?php
//include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>SAFEWINGS</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!-- body -->

<style>
    #aboutusimg
    {
        width:100%;
        height: 500px;
    }
    @media only screen and (max-width: 600px) {
  #aboutusimg {
    width: 100%;
    height: 300px;
  }
}

    </style>


<style>

/* Carousel Styles */
.carousel-indicators .active {
    background-color: #2980b9;
}

.carousel-inner img {
    width: 100%;
    max-height: 460px
}

.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
    opacity: 1;
    filter: alpha(opacity=100);
    background-image: none;
    background-repeat: no-repeat;
    text-shadow: none;
}

.carousel-control.left span {
    padding: 15px;
}

.carousel-control.right span {
    
    padding: 15px;
}

.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
    position: absolute;
    top: 45%;
    z-index: 5;
    display: inline-block;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
    left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
    right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
    background-color: #000;
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
    opacity: .7;
    filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 20%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {
    font-size: 40px;
}

.header-text h2 span {
    background-color: #2980b9;
    padding: 10px;
}

.header-text h3 span {
    background-color: #000;
    padding: 15px;
}

.btn-min-block {
    min-width: 170px;
    line-height: 26px;
}

.btn-theme {
    color: #fff;
    background-color: transparent;
    border: 2px solid #fff;
    margin-right: 15px;
}

.btn-theme:hover {
    color: #000;
    background-color: #fff;
    border-color: #fff;
}
</style>
<body>
    <!-- <div class="header_main">
        <div class="container">
            <div class="logo"><a href="index"><img src="images/newlogo.jpg" style="width: 162px; height:53px;"></a></div>
        </div>
    </div> -->
    </div>
    <div class="header">
        <div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                   <div class="col-md-6">
                  <a href="index"><img src="images/resizelogo.jpg"></a>

                 </div>
                 <div class="col-md-6">

                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg " style="float:right;">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                               <li class="nav-item active">
                                <a class="nav-link"  style="font-weight: bold;" href="index">HOME<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="service">SERVICES</a></li>
                               <li class="nav-item" href="#">
                                <a class="nav-link" href="contact">CONTACT</a></li>
                                <li class="nav-item" href="#">
                                <a class="nav-link" href="careers">CAREERS</a></li>
                              
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </div> 
    </div>


    <!-- end header end --> 
    
    <div class="services_main" style="padding-top: 0px;padding-bottom: 0px;">
      
<div class="col-sm-12">
    <div class="row">
        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:100%;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
               <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/newslide.jpg" alt="First slide">
                    <!-- Static Header -->
                   <!-- /header-text -->
                </div>
                <div class="item">
                    <img src="images/newslide2.jpeg" alt="Second slide">
                    <!-- Static Header -->
                    <!-- /header-text -->
                </div>
               <!-- <div class="item">
                    <img src="images/services.jpg" alt="Third slide">-->
                    <!-- Static Header -->
                   <!-- /header-text -->
               <!-- </div>-->
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /carousel -->
    </div>
</div>

</div>
    
    
    <!--services start -->
   
    <div class="services_main">
        <div class="container">
            <div class="creative_taital">
                <!-- <h1 class="creative_text">Creative Content Writing Services</h1> -->
                <p style="color: #050000; text-align: center;"><b>World trends are affecting the business economy and other industries. As a result, the banking sector has to resuscitate itself to make best use of existing opportunities and should be ready to face challenges ere long. 
            </b></p>

        <p style="color: #050000; text-align: center;">SAFEWINGS SOLUTIONS is a Banking and Financial Services company offering Business Process Requirements, Requirement Analysis, Project Management, System Implementation, Training, Upgradation, Testing, IT Support services, Interfacing, Migration and Outsourcing services to financial institutions who desire to advance and improve continually by profiting from integration of technology and services.  
        </p>

        <p style="color: #050000; text-align: center;">Our Company is an esteemed technical partner for our clientele around the world. We work with some of the world???s most renowned, innovative and creative businesses and independent software providers by providing our assistance in leveraging technology and outsourcing in our distinct areas of expertise.  
        </p>
        <p style="color: #050000; text-align: center;">Moreover, we are also focusing on website expansion with hybrid mobile applications to assist different Small and Medium Businesses (SMBs) to have versatile and distinctive IT infrastructure according to modern business trends.  
        </p>

<p style="color: #050000; text-align: center;"><b style="color:#af1116">Our mission</b> is to provide very simplified solutions on time for every need of our customer.</p>

<p style="color: #050000; text-align: center;">By integrating our extensive domain expertise with their vast IT experience and knowledge we provide a simple solution to the complex problem which makes our organization efficient and effective in all levels. The core strength of our organization to provide timely deliverables with best quality.  
        </p>

<p style="color: #050000; text-align: center;"><b style="color:#af1116">Our uncompromised </b> quality is the major reason for customer association by changing new customers into loyal customers. The professionalism of our services resulted in transforming various enquiries into contracts.</p>

<p style="color: #050000; text-align: center;color:#af1116"><b>In Short SAFEWINGS SOLUTIONS Deliver:</b></p>

<p style="color: #050000; text-align: center;">STELLAR SERVICES</p>

<p style="color: #050000; text-align: center;">EFFICIENT AND PROFESSIONAL RESPONSE TO THE CUSTOMERS QUERIES AND REQUIREMENTS</p>

<p style="color: #050000; text-align: center;">GENUINE, QUICK AND PROVEN MODUS OPERANDI</p>

                <!-- <div class="btn_main">
                    <button type="button" class="btn btn-dark btn-lg">Get started</button>
                </div> -->
            </div>
            
        </div>    
    </div>
  

    <!--Contact_section start -->
    <div class="contact_main">
       
</div>
<?php
include "footer.php";
?>
