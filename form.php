<!DOCTYPE html>
<head>
    <!-- meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Dental Form | Aerni Dental</title>
        <meta name="title" content="Dental Form" />
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
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <!-- Fancy Box -->
        <link rel="stylesheet" type="text/css" href="javascripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        <!-- jQuery ui -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
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
        <!-- jQuery ui -->
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="javascripts/jquery-ui.multidatespicker.js" type="text/javascript"></script>
        <!-- Fancy Box -->
        <script type="text/javascript" src="javascripts/fancybox/jquery.fancybox-1.3.4.js"></script>

<style>
.ui-datepicker .ui-datepicker-calendar .ui-state-highlight a {
background: green none;
color:white;}

.radio label {
    display:inline !important;
}
</style>

<script type="text/javascript">

    jQuery(function() {
      $('#main-menu').smartmenus();
    });

    $(document).ready(function() {



        jQuery("#referral").hide();

        jQuery("#current-patient").click(function(){
            jQuery("#referral").hide();
        });

        jQuery("#new-patient").click(function(){
            jQuery("#referral").show();
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

        $(function() {
            $( "#datepicker" ).datepicker();
        });

        $('#datepicker').multiDatesPicker({
            //beforeShowDay: $.datepicker.noWeekends,
            beforeShowDay: function(date) {
                var day = date.getDay();
                return [(day != 0 && day != 3 && day != 6)];
            },
            minDate: 14
        });

                



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
    <div class="row container container-form">

        <!-- Three-up Content Blocks -->
        <div style="padding-top:70px;" class="row"></div>

        <h4 style="text-align:center;">Request an appointment</h4>

        <div class="sr-txt">
            <div class="large-12 columns">
                <fieldset id="contact_form">
                    <!-- New or Current + Referral -->
                    <div class="form-inline columns">
                        <div class="radio radstyle">
                            <label>
                                <input type="radio" name="patient" id="current-patient" value="Current Patient">
                                Current Patient
                            </label>
                        </div>
                        <div class="radio radstyle">
                            <label>
                                <input type="radio" name="patient" id="new-patient" value="New Patient">
                                New Patient
                            </label>
                        </div>
                        <div id="referral">
                            <div>
                              If you're a new patient please tell us how you were referred to us:
                            </div>
                            <div>
                              <input style="margin-top:10px;" type="text" id="referral" name="referral" size="30">
                            </div>
                        </div>
                    </div>

                    <div class="large-6 columns">
                    <label>First Name</label>
                    <input type="text" name="fname" id="fname" placeholder="Enter Your First Name" />
                    </div>

                    <div class="large-6 columns">
                    <label>Last Name</label>
                    <input type="text" name="lname" id="lname" placeholder="Enter Your Last Name" />
                    </div>

                    <div class="large-4 columns">
                    <label>Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email" />
                    </div>

                    <div class="large-4 columns">
                    <label>Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Phone Number" />     
                    </div>

                    <div class="large-4 columns">
                    <label>Zip</label>
                    <input type="text" name="zip" id="zip" placeholder="Zip Code" />
                    </div>

                    <div class="large-4 columns">
                        <select class="form-control" name="reasonforapt" id="reasonforapt">
                            <option value="N/A" disabled selected>Reason for appointment</option>
                                <option value="New Appointment">New Appointment</option>
                                <option value="Dental Check Up">Dental Check Up</option>
                                <option value="Emergency Appointment">Emergency Appointment</option>
                                <option value="Orthodontic Consultation">Orthodontic Consultation</option>
                                <option value="Implant Consultation">Implant Consultation</option>
                                <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="large-4 columns">
                        <select class="form-control" name="aptime" id="aptime">
                            <option value="" disabled selected>Preferred Appointment Time</option>
                                <option value="Morning">Morning</option>
                                <option value="Afternoon">Afternoon</option>
                        </select>
                    </div>

                    <div class="large-4 columns">
                        <label>Preferred Date(s):</label>
                        <input type="text" name="date" id="datepicker" placeholder="Preferred Date(s):">
                    </div>

                    <div class="large-12 columns">
                    <label>Comments / Questions</label>
                    <textarea name="message" id="message" placeholder="Comments / Questions"></textarea>
                    </div>
            
                    <p class="form-txt columns">
                        Please note: by completing & submiting this form your appointment is <strong>not</strong> guaranteed.  Please confirm with our office (440.238.6141) that your appointment is made.
                    </p>

                    <div style="text-align:center;" class="large-12 columns">
                        <button type="button" class="btn btn-success" id="submit_btn">Submit</button>
                    </div>
                </fieldset>
                <div style="text-align:center;" id="result"></div>
            </div>
        </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    </div><!--end container -->
</body>
</html>
