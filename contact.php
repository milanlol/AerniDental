<!DOCTYPE html>
<head>
    <!-- meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Contact Us | Aerni Dental</title>
        <meta name="title" content="Contact Us" />
        <meta name="author" content="Aerni Dental" />
        <meta name="description" content="At Aerni Dental our mission is simple: to provide exceptional dental care in a professional environment. We offer advanced treatment techniques that deliver faster, easier, less costly, more comfortable results. You'll leave Aerni Dental with a brighter, healthier smile that will make you feel happier and more confident. All with less pain and anxiety." />
        <meta name="keywords" content="dental cleveland, local dental cleveland, find dental cleveland, braces cleveland, straighten teeth cleveland, whitening cleveland, veneers, invisalign, tooth cleaning, dental checkup, dental check-up, cerec, teeth in a day, tip-edge, tip edge, wisdom teeth, root canals, same day crowns, braces, orthodontics, toothache, dentures, false teeth, fillings, periodontal maintenance, chipped tooth, broke tooth, broken tooth, tooth cap" />

    <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans|Lato' rel='stylesheet' type='text/css'>

    <!-- IE Style -->
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie8-and-up.css" />
        <![endif]-->
        <!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
        <!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
        <!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
        <!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->

    <!-- CSS -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Normalize -->
        <link href="css/normalize.css" rel="stylesheet" type="text/css" />
        <!-- Foundation -->
        <link href="css/foundation.css" rel="stylesheet" type="text/css" />
        <!-- SmartMenus core CSS (required) -->
        <link href='css/sm-core-css.css' rel='stylesheet' type='text/css' />
        <link href='css/sm-clean/sm-clean.css' rel='stylesheet' type='text/css' />
        <!-- Main Style Sheet -->
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

    <!-- JavaScript -->
        <!-- jQuery -->
        <script src="javascripts/jquery.js" type="text/javascript"></script>
        <!-- SmartMenus jQuery plugin -->
        <script src="javascripts/jquery.smartmenus.js" type="text/javascript"></script>
    
        <script>
            jQuery('document').ready(function(){
                jQuery(function() {
                  $('#main-menu').smartmenus();
                });

                (function ($) {
                    "use strict";

                    // Detecting IE
                    var oldIE;
                    if ($('html').is('.ie6, .ie7, .ie8')) {
                        oldIE = true;
                    }

                    if (oldIE) {
                        jQuery('label').show();
                    } else {
                        jQuery('label').hide();
                    }

                }(jQuery));

                /* Form Submition Script */

                $("#submit_btn").click(function() { 

                    $('#result')[0].scrollIntoView(true);

                    //get input field values
                    var user_patient    = $('input[name=patient]:checked').val();
                    var user_referral   = $('input[name=referral]').val();
                    var user_fname      = $('input[name=fname]').val(); 
                    var user_lname      = $('input[name=lname]').val(); 
                    var user_email      = $('input[name=email]').val();
                    var user_zip        = $('input[name=zip]').val();
                    var user_phone      = $('input[name=phone]').val();
                    var user_reasonforapt = $('#reasonforapt option:selected').val();
                    var user_aptime     = $('#aptime option:selected').val();
                    var user_date       = $('input[name=date]').val();
                    var user_message    = $('textarea[name=message]').val();
                    
                    //simple validation at client's end
                    //we simply change border color to red if empty field using .css()
                    var proceed = true;
                    if(user_fname==""){ 
                        $('input[name=fname]').css('border-color','red'); 
                        proceed = false;
                    }
                    if(user_lname==""){ 
                        $('input[name=lname]').css('border-color','red'); 
                        proceed = false;
                    }
                    if(user_email==""){ 
                        $('input[name=email]').css('border-color','red'); 
                        proceed = false;
                    }
                    if(user_phone=="") {    
                        $('input[name=phone]').css('border-color','red'); 
                        proceed = false;
                    }
                    if(user_message=="") {  
                        $('textarea[name=message]').css('border-color','red'); 
                        proceed = false;
                    }
                    
                    //everything looks good! proceed...
                    if(proceed) 
                    {
                        //data to be sent to server
                        post_data = {'userPatient':user_patient, 'userReferral':user_referral, 'userFName':user_fname, 'userLName':user_lname, 'userEmail':user_email, 'userZip':user_zip, 'userPhone':user_phone, 'userReasonforapt':user_reasonforapt, 'userAptime':user_aptime, 'userDate':user_date, 'userMessage':user_message};
                        
                        //Ajax post data to server
                        $.post('contact_me.php', post_data, function(data){  
                            
                            //load success massage in #result div element, with slide effect.       
                            $("#result").hide().html('<div class="success">'+data+'</div>').slideDown();
                            
                            //reset values in all input fields
                            $('#contact_form input').val(''); 
                            $('#contact_form textarea').val(''); 
                            
                        }).fail(function(err) {  //load any error data
                            $("#result").hide().html('<div class="error">'+err.statusText+'</div>').slideDown();
                        });
                    }
                            
                });
                
                //reset previously set border colors and hide all message on .keyup()
                $("#contact_form input, #contact_form textarea").keyup(function() { 
                    $("#contact_form input, #contact_form textarea").css('border-color',''); 
                    $("#result").slideUp();
                });
            });
        </script>
</head>

<body>
<!-- Header -->
<?php include 'header.php'; ?>

    <!-- Container Starts -->
    <div class="row container contact-page">

        <!-- Padding for Logo Circle -->
        <div style="padding-top:50px;" class="row"></div>

        <!-- Map -->
        <div class="Flexible-container">
            <iframe width="425" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2996.0132448484646!2d-81.8366167!3d41.330325349999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x213775c607af6071!2sAerni+Dental!5e0!3m2!1sen!2sus!4v1393439045706"></iframe>
        </div>
        
        <div class="large-6 columns contact-info">
            <div class="large-6 medium-6 small-12 columns ietxt">
                <h6>OFFICE HOURS</h6>
                    <p>
                        Mon, Tue & Thr: 8 - 5 pm <br />Fri: 9 - 3 pm
                    </p>
                <h6>LOCATION</h6>
                    <p>
                        11177 Pearl Road <br />Strongsville, OH 44136 
                    </p>
            </div>
            <div class="large-6 medium-6 small-12 columns ietxt">  
                <h6>PHONE</h6>
                    <p>
                        p: 440-238-6141 <br />f: 440-238-9295
                    </p>
                <h6>EMAIL</h6>
                    <p>info@aernidental.com</p>
            </div>
        </div>

        <!-- Form -->
        <div class="large-6 columns contact-form">
            <fieldset id="contact_form">
                <div style="text-align:center;" id="result"></div>
                <div class="large-6 columns">
                <label>First Name</label>
                <input type="text" name="fname" id="fname" placeholder="Enter Your First Name" />
                </div>
                <div class="large-6 columns">
                <label>Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name" />
                </div>
                <div class="large-6 columns">
                <label>Email</label>
                <input type="text" name="email" id="email" placeholder="Enter Your Email" />
                </div>
                <div class="large-6 columns">
                <label>Phone</label>
                <input type="text" name="phone" id="phone" placeholder="Phone Number" />     
                </div>
                <div class="large-12 columns">
                <label>Say hello!</label>
                <textarea name="message" id="message" placeholder="Say hello!"></textarea>
                </div>
                <button type="button" class="btn btn-success" id="submit_btn">Submit</button>
            </fieldset>
        </div>

        <!-- Footer -->
        <?php include 'footer.php'; ?>

    </div><!--end container -->
</body>
</html>
