$(document).ready(function() {
    $('#p0').show();
    $('#p1').hide();
    $('#p2').hide();

    $('#i-0').click(function(){
        $('#p0').show();
        $('#p1').hide();
        $('#p2').hide();
    });

    $('#i-1').click(function(){
        $('#p0').hide();
        $('#p1').show();
        $('#p2').hide();
    });

    $('#i-2').click(function(){
        $('#p0').hide();
        $('#p1').hide();
        $('#p2').show();
    });
});

