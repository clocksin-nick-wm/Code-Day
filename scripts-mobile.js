
jQuery('document').ready(function(){
    $('#button1').on('click', function (){
        $('#button1').css({display: "none"});
        $('#button2').css({display: "inherit"});
    });
    $('#button2').on('click', function (){
        $('#button1').css({display: "inherit"});
        $('#button2').css({display: "none"});
    });
});
