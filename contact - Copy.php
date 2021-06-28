<?php
include "header.php";
?>

    <!-- end header end -->
    <div class="contact_main">
    <!--touch_section start -->

    <div class="touch_section">
        <div class="container">
            <h1 class="touch_text">Let's Get In Touch!</h1>
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
                              <input type="text" class="email-bt demoInputBox" placeholder="Name" name="name" id="name">
                              <span class="info"></span>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt demoInputBox" placeholder="Email" name="email" id="email">
                               <span class="info"></span>
                            </div>
                            <div class="form-group">
                              <textarea class="massage-bt demoInputBox" placeholder="Massage" rows="5" id="message" name="message"></textarea>
                              <span class="info"></span>

                            </div>
                            
                         <!-- </form>-->
                       </div> 
                       <div class="send_btn">
                            <button name="submit" class="main_bt" onClick="sendContact();">Send</button>

                        <!--<button  type="button" class="main_bt"><a href="#">Send</a></button>-->
                       </div>                   
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <p class="lorem_text">E: info@lapatex.com<br>
                            Office 74, Arxiepiskopou Makariou III 66,<br>
                            1077 Nicosia Cyprus</p>
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
   // $(".demoInputBox").css('background-color','');
    $(".info").html('');
    if(!$("#name").val()) {
        $("#name-info").html("(required)");
       // $("#name").css('background-color','#eb0c1e');
        valid = false;
    }
    if(!$("#email").val()) {
        $("#email-info").html("(required)");
        //$("#email").css('background-color','#eb0c1e');
        valid = false;
    }
    if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#email-info").html("(invalid)");
       // $("#email").css('background-color','#eb0c1e');
        valid = false;
    }
    if(!$("#message").val()) {
        $("#message-info").html("(required)");
        //$("#message").css('background-color','#eb0c1e');
        valid = false;
    }
    
    return valid;
}

</script>