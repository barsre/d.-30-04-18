// Kode fra https://www.codeproject.com/Articles/540858/Smooth-Scroll-to-the-Top-of-the-Page-jQuery
jQuery(document).ready(function($){
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) { /* Antal pixels man skal scrolle før knappen vises */
            $('#backToTop').fadeIn('slow');
        } else {
            $('#backToTop').fadeOut('slow');
        }
    });
    $('#backToTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});