$(document).ready(function ($) {

    //Wysokości i szerokości
    var slideWid = $('#pics img').width();
    var slideHei = $('#pics img').height();
    var slideNumber = $('#pics img').length;
    var slidesAllWid = slideNumber * slideWid;

   
    $('#slides').css({
        width: slideWid,
        height: slideHei
    });
    $('#pics').css({
        width: slidesAllWid,marginLeft: -slideWid
    });
    
    
    $('#pics img:last-child').prependTo('#pics');

    
    function goLeft() {
        $('#pics').animate({
            left: +slideWid
        }, 1200, function () {
            $('#pics img:last-child').prependTo('#pics');
            $('#pics').css('left', '');
        });
    };

    
    function goRight() {
        $('#pics').animate({
            left: -slideWid
        }, 1200, function () {
            $('#pics img:first-child').appendTo('#pics');
            $('#pics').css('left', '');
        });
    };

    
    if(slideNumber != 0) {
    
    $('#prev').click(function () {
        goLeft();
    });

    $('#next').click(function () {
       
        goRight();
    });
    };
    

    
    
    
    
    
});
