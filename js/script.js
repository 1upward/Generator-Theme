$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});


WebFontConfig = {
    google: { families: [ 'Open+Sans:700,800,400:cyrillic-ext,latin', 'Open+Sans+Condensed:300:cyrillic-ext,latin' ] }
};
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();
  
jQuery(document).ready(function() {
    jQuery('.carousel').carousel({interval: 1500});    
    document.getElementById("myselect").addEventListener("change", function () {
        document.getElementById("mydiv").innerHTML = this.value;
    });
});

var clock;
        
        $(document).ready(function() {
            var clock;
            clock = $('.clock').FlipClock({
                clockFace: 'DailyCounter',
                autoStart: false,   
                lang: 'ru'  
            });    

            clock.setTime(440880);
            clock.setCountdown(true);
            clock.start();

        });
