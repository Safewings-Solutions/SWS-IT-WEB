<?php
//include "header.php";
//Hr@safewingsit.com
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

</head>
<!-- body -->
<body>
	<div class="header_main">
		<div class="container">
			<div class="logo"><a href="index"><img src="images/newlogo.jpg" style="width: 162px; height:53px;"></a></div>
		</div>
	</div>
	</div>
	<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                               <li class="nav-item ">
                                <a class="nav-link" href="index">HOME<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about">ABOUT</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="service">SERVICES</a></li>
                               <li class="nav-item" href="#">
      	                        <a class="nav-link" href="contact">CONTACT</a></li>
                                <li class="nav-item" href="#">
                                <a class="nav-link active" style="background-color: #af1116;" href="careers">CAREERS</a></li>
                              
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->
    <div class="contact_main">
    <!--touch_section start -->

    <div class="touch_section">
        <div class="container">
            <h1 class="touch_text">Careers</h1>
        </div>
    </div>

    <div class="lets_touch_main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="input_main">
                       <div class="container">
                        <!--  <form action="/contact_mail.php" method="POST">-->
                            <div class="form-group">
                                <span id="name-info" class="info" style="color:red"></span><br/>

                              <input type="text" class="email-bt demoInputBox" placeholder="Name" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <span id="email-info" class="info" style="color:red"></span><br/>
                              <input type="text" class="email-bt demoInputBox" placeholder="Email" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <span id="message-info" class="info" style="color:red"></span><br/>
                              <textarea class="massage-bt demoInputBox" placeholder="Massage" rows="5" id="message" name="message"></textarea>

                            </div>
                            
                         <!-- </form>-->
                       </div> 
                       <div class="send_btn">
                            <button type="button" name="submit" class="main_bt" onClick="sendContact();">Send</button>

                        <!--<button  type="button" class="main_bt"><a href="#">Send</a></button>-->
                       </div> 
                      <!--  <div class="send_btn">
                        <button  type="button" class="main_bt"><a href="#">Send</a></button>
                       </div>  -->                  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <p class="lorem_text">To get in touch with us about any queries or to learn more about our openings please fill in the form below.<br></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--touch_section end -->
    <!--Contact_section start -->
    <div class="contact_main">
      </div>
    <!--Contact_section end -->

    <?php
    include "footer.php";
    ?>
    <script type="text/javascript">
    function sendContact() {
    var valid;  
    valid = validateContact();
    if(valid) {
        jQuery.ajax({
            url: "contact_mail.php",
            data:'name='+$("#name").val()+'&email='+
            $("#email").val()+'&message='+
            $("#message").val(),
            type: "POST",
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        });
    }
}
</script>
<script type="text/javascript">
    function validateContact() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    if(!$("#name").val()) {
        $("#name-info").html("(Required)");
        $("#name").css('background-color','#03fc3d');
        valid = false;
    }
    if(!$("#email").val()) {
        $("#email-info").html("(Required)");
        $("#email").css('background-color','#03fc3d');
        valid = false;
    }
    if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#email-info").html("(Invalid Email)");
        $("#email").css('background-color','#03fc3d');
        valid = false;
    }
    if(!$("#message").val()) {
        $("#message-info").html("(Required)");
        $("#message").css('background-color','#03fc3d');
        valid = false;
    }
    
    return valid;
}

</script>   