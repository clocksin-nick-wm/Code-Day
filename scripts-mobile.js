
jQuery('document').ready(function(){
    $("#list-table").hide();
    $('#button1').on('click', function (){
        $('#button1').css({display: "none"});
        $('#button2').css({display: "inherit"});
        $("#list-table").toggle();
    });
    $('#button2').on('click', function (){
        $('#button1').css({display: "inherit"});
        $('#button2').css({display: "none"});
        $("#list-table").toggle();
    });
});
