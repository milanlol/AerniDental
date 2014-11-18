<footer class="row">
    <div class="large-12 columns">
        <hr />
        <div class="row">
            <div class="large-4 columns footerperception">
                <p class="copyright">Copyright &copy;
                    <script language="javascript" type="text/javascript">
                        var today = new Date()
                         var year = today.getYear()
                         if (year < 1900) {
                            year = year + 1900;
                        }
                        document.write(year)
                    </script>
                    Aerni Dental| Site designed by <a href="http://www.perceptionmm.com">Perception Multimedia</a>
                </p>
                
            </div>
            <div class="large-3 columns">
                <div id="social-media">
                    <a href="http://www.yelp.com/biz/aerni-dental-strongsville" target="_blank"><img src="images/yelp.png" /></a>
                    <a href="https://www.youtube.com/user/AerniDental" target="_blank"><img src="images/youtube.png" /></a>
                    <a href="https://plus.google.com/106948701383934065003" target="_blank"><img src="images/gplus.png" /></a>
                    <a href="https://www.facebook.com/AerniDental" target="_blank"><img src="images/facebook.png" /></a>
                </div>
            </div>
            <div class="large-5 columns footernav">
                <ul class="inline-list right left-sm">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="services.php">Services</a>
                    </li>
                    <li><a href="about.php">About Us</a>
                    </li>
                    <li><a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
jQuery('document').ready(function(){

        jQuery(function() {

        if ($(window).width() < 767) {
            jQuery('.footernav').insertBefore('.footerperception');
        } 
        });
    });
</script>