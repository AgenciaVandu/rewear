$(document).ready(function(){
    $('#tabs-1').show();
    $('#tabs-2').hide();

    $('#ordenes').click(function(){
        $('#tabs-1').show();
        $('#tabs-2').hide();
    });

    $('#cuenta').click(function(){
        $('#tabs-2').show();
        $('#tabs-1').hide();
    });
    
});

$(document).ready(function(){
    $('#f-emprendedor').show();
    $('#f-asociacion').hide();
    $('#f-distribuidor').hide();
    
    $('#emprendedor').click(function() {
        $('#f-emprendedor').show();
        $('#f-asociacion').hide();
        $('#f-distribuidor').hide();
    });
    
    $('#asociacion').click(function() {
        $('#f-emprendedor').hide();
        $('#f-asociacion').show();
        $('#f-distribuidor').hide();
    });

    $('#distribuidor').click(function(){
        $('#f-emprendedor').hide();
        $('#f-asociacion').hide();
        $('#f-distribuidor').show();
    });
    
});

