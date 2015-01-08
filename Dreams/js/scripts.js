$(document).ready(function(){

});
// Backgruond resize for different displays
$(window).load(function() {    
 
    var theWindow        = $(window),
        $bg              = $("#bg, #bg2"),
        aspectRatio      = $bg.width() / $bg.height();

    function resizeBg() {

            if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
                $bg
                    .removeClass()
                    .addClass('bgheight');
            } else {
                $bg
                    .removeClass()
                    .addClass('bgwidth');
            }

    }

    theWindow.resize(function() {
            resizeBg();
    }).trigger("resize");

});