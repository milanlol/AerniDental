<!DOCTYPE html>
<head>
    <!-- meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Aerni Dental</title>
        <meta name="title" content="Home" />
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
        <!-- SmartMenus jQuery plugin -->
        <script src="javascripts/jquery.smartmenus.js" type="text/javascript"></script>
        <!-- Custom JS -->
        <script src="javascripts/js.js" type="text/javascript"></script>
        <!-- Fancy Box -->
        <script type="text/javascript" src="javascripts/fancybox/jquery.fancybox-1.3.4.js"></script>
        <!-- Respond JS -->
        <script src="javascripts/respond.min.js" type="text/javascript"></script>

        <script>
            jQuery(function () {
                $('#main-menu').smartmenus();
            });
        </script>
</head>

<body>
<!-- Header -->
<?php include 'header.php'; ?>


    <!-- Container Starts -->
    <div class="row container">

        <!-- Three Content Blocks -->
        <div class="row threecta">
            <div class="large-4 columns iecol">
                <img src="images/smile_pic5.png" class="img1" alt="Smile with dental implants!" />
                <a href="implants.php"><p class="bold-box">Smile with dental implants!</p></a>
            </div>
            <div class="large-4 columns iecol">
                <img src="images/smile_pic6v.png" class="img2" alt="Tip Edge method Orthodontics" />
                <img src="images/smile_pic6.png" class="img2-1" alt="Tip Edge method Orthodontics" />
                <a href="orthodontics.php"><p class="bold-box">Tip Edge method Orthodontics</p></a>
            </div>
            <div class="large-4 columns iecol">
                <img src="images/Smile_pic4.png" class="img3" alt="Try our preventative care!"/>
                <a href="preventative.php"><p class="bold-box">Try our preventative care!</p></a>
            </div>
        </div>



        <!-- Tour Video + Description Row -->
        <div class="bg-off-section">
            <div class="row fp-txt">
                <h3 style="text-align:center;">In Pursuit of Oral Health and Happiness</h3>
                <div class="large-6 columns justify">
                    <p>
                        We believe a trip to the dentist should make you feel healthier, happier, more confident, more knowledgeable. All with less anxiety and pain.
                    </p>
                    <p>
                        That’s why we use all our skill and technology to diagnose what you need and all our focused attention to hear what you want. We’ll offer advanced treatment techniques that deliver faster, easier, less costly, more comfortable results. We never forget the power of education and preventative care.
                    </p>
                </div>
                <div id="fp-vid" class="large-6 columns">
                    <div class="flex-video"> 
                        <div class="else-stories">
                            <div onload='jQuery(".yt").trigger("click");' class="row stories" style="text-align:center;">
                                    <a class="yt youtube-media" title="" href="https://www.youtube.com/embed/JgGrWyd__p0?rel=0">
                                        <img class="img-responsive" src="images/tour_thumb.png" alt="Tour Video"/>
                                    </a>
                            </div>
                        </div>
                        <!-- Tour Video that only shows up on Android devices -->
                        <div class="android-stories">
                            <a href="https://www.youtube.com/watch?v=JgGrWyd__p0">
                                <img src="images/tour_thumb.png" alt="Tour Video"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                

        <!-- Stories -->
        <?php include 'stories.php'; ?>

        <!-- Last Row Dr. Aerni + Quote -->
        <div class="bg-off-section row">
            <div id="bottomofpage">
                <div class="large-6 columns ">
                    <img src="images/newAerni.png" alt="Dr. Aerni Picture"/>
                </div>
                <div class="large-6 columns testimonial-txt">
                    <p>
                        “I want my patients to have world-class care, but I also want them to feel comfortable. Since we overlook the Metroparks, I installed extra-large windows so patients can enjoy the amazing views and relax."
                    </p>
                    <p>
                        "We use a combination of skill, technology, and focused attention to provide our patients with a commodity that’s hard to find these days: continuity of care. All the dental work is completed in our office. There is no need to go from doctor to doctor to complete treatment. From preventative care and checkups, to state-of-the-art imaging and implant surgery, everything at Aerni Dental is done in the same office with a doctor and staff you know and trust. Your comfort, your health, and your needs are always front and center.”
                    </p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'footer.php'; ?>

    </div> <!--end container -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-7776747-12', 'aernidental.com');
      ga('send', 'pageview');

    </script>


</body>
</html>