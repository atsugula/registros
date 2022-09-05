/*==========================================
    activamos el input con select equipo
==========================================*/
$('#forminsertar').on('change','select.equipo', function(){
    if($('.equipo').val()=="Si"){
        $('.equiposhidden').removeAttr('hidden');
    }else {
        $('.equiposhidden').prop('hidden',true);
    }
    
})