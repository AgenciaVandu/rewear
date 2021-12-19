$(document).ready(function() {
    $('#primera').show();
    $('#segunda').hide();
    $('#tercera').hide();

    $('#i-uno').click(function(){
        $('#primera').show();
        $('#segunda').hide();
        $('#tercera').hide();
    });

    $('#i-dos').click(function(){
        $('#primera').hide();
        $('#segunda').show();
        $('#tercera').hide();
    });

    $('#i-tres').click(function(){
        $('#primera').hide();
        $('#segunda').hide();
        $('#tercera').show();
    });
});

