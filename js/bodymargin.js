/**
 * bodymargin.js
 *
 * Dynamic margin-top for body element.
 */

if (typeof jQuery === 'undefined') {
    throw new Error('Flation Theme\' requires jQuery')
}

+function($)
{
    $(document).ready(function(){
        if ( $("body").width() > 992  ) {
            var margintop = $("#navbar").height() + 20;
            $("body").css('margin-top', margintop);
        }

        if ( $('#wpadminbar').length && $("body").width() < 600 ) {
            $(window).scroll(function(){
                var bo = $("body").scrollTop();
                if ( bo > 46 ) {
                    $(".navbar").css('top', "0");
                } else {
                    $(".navbar").css('top', "46px");
                }
            });
        }
    });
}(jQuery);