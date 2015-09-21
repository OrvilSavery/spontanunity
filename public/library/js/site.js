//Site Scripts
$(document).ready(function(){
    var windowWidth = $(window).width();
    var docHeight = $(document).height();
    if(windowWidth < 1024) {
        $('body').css({
            'background-size': '130% 130%'
        });
    }
});