<script>

$(document).ready(function(){

    getGi();
    showPanelGi();
    $("#establecimiento_id" ).on("change",getGi);
    $("#tipo").on("change",showPanelGi);
    


  
});

</script>