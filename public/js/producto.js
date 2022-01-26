$(document).ready(function() {
    $('#p1').show();
    $('#p2').hide();
    $('#p3').hide();

    $('#i-1').click(function(){
        $('#p1').show();
        $('#p2').hide();
        $('#p3').hide();
    });

    $('#i-2').click(function(){
        $('#p1').hide();
        $('#p2').show();
        $('#p3').hide();
    });

    $('#i-3').click(function(){
        $('#p1').hide();
        $('#p2').hide();
        $('#p3').show();
    });
    $('#i-4').click(function(){
        $('#p1').hide();
        $('#p2').hide();
        $('#p3').hide();
    });
});

