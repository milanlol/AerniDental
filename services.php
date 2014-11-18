<!DOCTYPE html>
<head>
    <!-- meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Services | Aerni Dental</title>
        <meta name="title" content="Services" />
        <meta name="author" content="Aerni Dental" />
        <meta name="description" content="At Aerni Dental our mission is simple: to provide exceptional dental care in a professional environment. We offer advanced treatment techniques that deliver faster, easier, less costly, more comfortable results. You'll leave Aerni Dental with a brighter, healthier smile that will make you feel happier and more confident. All with less pain and anxiety." />
        <meta name="keywords" content="dental cleveland, local dental cleveland, find dental cleveland, braces cleveland, straighten teeth cleveland, whitening cleveland, veneers, invisalign, tooth cleaning, dental checkup, dental check-up, cerec, teeth in a day, tip-edge, tip edge, wisdom teeth, root canals, same day crowns, braces, orthodontics, toothache, dentures, false teeth, fillings, periodontal maintenance, chipped tooth, broke tooth, broken tooth, tooth cap, dental implant cost, tooth implant, implant, dentist, dental implant, dental implant Cleveland, mini implant, dental implants in, cosmetic denits, dental treatment, cosmetic dentistry, bone grafing, sinus lift, grafting, braces, dental braces, orthodontist, orthodontics, braces cleveland, braces cost, braces price, kids braces, orthodontist cleveland, orthodontist strongsville, affordable dental care" />

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
        <!-- Fancy Box -->
        <link rel="stylesheet" type="text/css" href="javascripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
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
        <!-- jQuery ui -->
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <!-- SmartMenus jQuery plugin -->
        <script src="javascripts/jquery.smartmenus.js" type="text/javascript"></script>
        <!-- Custom JS -->
        <script src="javascripts/js.js" type="text/javascript"></script>
        <!-- Fancy Box -->
        <script type="text/javascript" src="javascripts/fancybox/jquery.fancybox-1.3.4.js"></script>

        <script>
            jQuery(function() {
              $('#main-menu').smartmenus();
            });

            jQuery('document').ready(function(){
                if ($(window).width() < 767) {
                    jQuery('.swap2').insertBefore('.swap1');
                    jQuery('.swap4').insertBefore('.swap3');
                    jQuery('.swap6').insertBefore('.swap5');
                } 

                (function ($) {
                "use strict";

                // Detecting IE
                var oldIE;
                if ($('html').is('.ie6, .ie7, .ie8')) {
                    oldIE = true;
                }

                if (oldIE) {
                    jQuery('.swap2').insertBefore('.swap1');
                    jQuery('.swap4').insertBefore('.swap3');
                    jQuery('.swap6').insertBefore('.swap5');
                } else {
                    // ..And here's the full-fat code for everyone else
                }
            }(jQuery));
            });
        </script>
</head>

<body>
<!-- Header -->
<?php include 'header.php'; ?>

    <!-- Container Starts -->
    <div class="row container srvc-container">
        
    <!-- Three-up Content Blocks -->
    <div style="padding-top:50px;" class="row"></div>

    <!-- Implants -->
    <div class="row sr-imp">
        <div class="large-6 columns swap1">
            <div class="else-stories">        
                <div onload='jQuery(".yt").trigger("click");' class="row stories" style="text-align:center;">
                    <a class="yt youtube-media" title="" href="https://www.youtube.com/embed/9xeeIyYBmvY?rel=0">
                        <img class="img-responsive srvc-img" src="images/implants_thumb.png" alt="Implants"/>
                    </a>
                </div>
            </div>
            <div class="android-stories">
                <a href="https://www.youtube.com/watch?v=9xeeIyYBmvY">
                    <img src="images/implants_thumb.png" alt="Implants"/>
                </a>
            </div>
        </div>
        <div class="large-6 columns swap2">
            <h4>Implants</h4>
            <p class="justify">Implants give you the ability to smile confidently, speak well and provide improved chewing.</p>
            <a href="implants.php">
                <div id="sr-empt-btn">
                    More About Implants >
                </div>
            </a>
        </div>
    </div> <!-- End of Implants -->

    <!-- Orthodontics -->
    <div class="row sr-orth">
        <div class="large-6 columns">
            <h4>Orthodontics</h4>
            <p class="justify">At Aerni Dental we are committed to providing both children and adults with a positive and painless orthodontic experience.</p>
            <a href="orthodontics.php">
                <div id="sr-fill-btn">
                    More About Orthodontics >
                </div>
            </a>
        </div>
		<div class="large-6 columns">
            <div class="else-stories">             
                <div onload='jQuery(".yt").trigger("click");' class="row stories" style="text-align:center;">
                    <a class="yt youtube-media" title="" href="https://www.youtube.com/embed/DRbY00nIcNc?rel=0">
                        <img class="img-responsive srvc-img" src="images/orth_thumb.png" alt="Orthodontics"/>
                    </a>
                </div>
            </div>
            <div class="android-stories">
                <a href="http://www.youtube.com/watch?v=DRbY00nIcNc"><img src="images/orth_thumb.png" alt="Orthodontics"/></a>
            </div>
        </div>   
    </div> <!-- End of Orthodontics -->
    
    <!-- Preventative Care -->
    <div class="row sr-prev">
        <div class="large-6 columns swap3">
            <div class="else-stories">      
                <div onload='jQuery(".yt").trigger("click");' class="row stories" style="text-align:center;">
                    <a class="yt youtube-media" title="" href="https://www.youtube.com/embed/7MwuuAscHyo?rel=0">
                        <img class="img-responsive srvc-img" src="images/rest_thumb.png" alt="Preventative Care"/>
                    </a>  
                </div>
            </div>
            <div class="android-stories">
                <a href="http://www.youtube.com/watch?v=7MwuuAscHyo"><img src="images/rest_thumb.png" alt="Preventative Care"/></a>
            </div>
        </div>
        <div class="large-6 columns swap4">
            <h4>Preventative Care</h4>
            <p class="justify">New technology helps diagnose problems earlier. This allows Aerni Dental to treat problems with “kinder and gentler” techniques.</p>
            <a href="preventative.php">
                <div id="sr-empt-btn">
                    More About Preventative Care >
                </div>
            </a>
        </div>
    </div> <!-- End of Preventative Care -->

    <!-- Restorative Care -->
    <div class="row sr-crwn">
        <div class="large-6 columns">
            <h4>Restorative Care</h4>
            <p class="justify">New technology helps diagnose problems earlier. This allows Aerni Dental to treat problems with “kinder and gentler” techniques.</p>
            <a href="restorative.php">
                <div id="sr-fill-btn">
                    More About Restorative Care >
                </div>
            </a>
        </div>
        <div class="large-6 columns">
            <img class="crown-pic iepad" src="images/cerec3d2.jpg" alt="Restorative Care" />
        </div> 
    </div> <!-- End of Restorative Care -->

    <!-- Cosmetic Dentistry -->
    <div class="row sr-cos">
        <div class="large-6 columns swap5">
            <img class="iepad" src="images/30766606.jpg" alt="Cosmetic Dentistry" />
        </div>
        <div class="large-6 columns swap6">
            <h4>Cosmetic Dentistry</h4>
            <p class="justify">New technology helps diagnose problems earlier. This allows Aerni Dental to treat problems with “kinder and gentler” techniques.</p>
            <a href="cosmetic.php">
                <div id="sr-empt-btn">
                    More About Cosmetic Dentistry >
                </div>
            </a>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    
</div><!--end container -->
</body>
</html>