$(document).ready(function(){
    $('#tabs-1').show();
    $('#tabs-2').hide();

    $('#ordenes').click(function(){
        $('#tabs-1').show();
        $('#tabs-2').hide();
    });

    $('#cuenta').click(function(){
        $('#tabs-1').hide();
        $('#tabs-2').show();
        $('#tabs-3').show();
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
$(document).ready(function(){
    $('#mostrar-planes').hide();
    $('#cancelar-aumento').hide();
    
    $('#aumentar-planes').click(function() {
        $('#mostrar-planes').show();
        $('#cancelar-aumento').show();
    });
    
    $('#cancelar-aumento').click(function() {
        $('#mostrar-planes').hide();
        $('#cancelar-aumento').hide();
    });
    
});

