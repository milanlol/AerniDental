jQuery('document').ready(function () {


    /* Javascript Pop-up Text on whyus.php */

            $(function() {
                var moveLeft = 0;
                var moveDown = 0;
                $('a.popper').hover(function(e) {
               
                    var target = '#' + ($(this).attr('data-popbox'));
                     
                    $(target).show();
                    moveLeft = $(this).outerWidth();
                    moveDown = ($(target).outerHeight() / 2);
                }, function() {
                    var target = '#' + ($(this).attr('data-popbox'));
                    $(target).hide();
                });
             
                $('a.popper').mousemove(function(e) {
                    var target = '#' + ($(this).attr('data-popbox'));
                     
                    leftD = e.pageX + parseInt(moveLeft);
                    maxRight = leftD + $(target).outerWidth();
                    windowLeft = $(window).width() - 40;
                    windowRight = 0;
                    maxLeft = e.pageX - (parseInt(moveLeft) + $(target).outerWidth() + 20);
                     
                    if(maxRight > windowLeft && maxLeft > windowRight)
                    {
                        leftD = maxLeft;
                    }
                 
                    topD = e.pageY - parseInt(moveDown);
                    maxBottom = parseInt(e.pageY + parseInt(moveDown) + 20);
                    windowBottom = parseInt(parseInt($(document).scrollTop()) + parseInt($(window).height()));
                    maxTop = topD;
                    windowTop = parseInt($(document).scrollTop());
                    if(maxBottom > windowBottom)
                    {
                        topD = windowBottom - $(target).outerHeight() - 20;
                    } else if(maxTop < windowTop){
                        topD = windowTop + 20;
                    }
                 
                    $(target).css('top', topD).css('left', leftD);
                 
                 
                });
             
            });

    /*Open YouTube Videos on Android in new window*/

    jQuery(function () {

        var ua = navigator.userAgent.toLowerCase();
        var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
        var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;

        jQuery(".android-stories").hide();
    
        if(isAndroid) {
            jQuery(".android-stories").show();
            jQuery(".else-stories").hide();
        } 
        if (is_chrome) {
            jQuery(".else-stories").show();
            jQuery(".android-stories").hide();
        }
    });

    /* Open Fancybox */


    jQuery(".yt").click(function () {
        jQuery.fancybox({
            'padding': 0,
            'autoScale': false,
            'transitionIn': 'none',
            'transitionOut': 'none',
            'title': this.title,
            'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
            'type': 'swf',
            'swf': {
                'wmode': 'transparent',
                'allowfullscreen': 'true'
            }
        });
        return false;
    });

    $(".youtube-media").on("click", function (e) {
        $.fancybox({
            href: this.href,
            type: "iframe" // when using embed format
        });
        return false;
    });

    
    $('iframe').each(function(){
        var url = $(this).attr("src");
        $(this).attr("src",url+"?wmode=transparent");
    });



    /* Accordion jQuery - UI */

    $(function () {
        $("#accordion").accordion();
    });

});
