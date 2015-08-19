<script>

$(document).ready(function(){

    $("#ruta").on("change",getMun);
    $("#municipio").on("change",getEe);


    $("#agregar").on("click",function(){

        var values = "";
        var eeSelected = $("#establecimiento_id").val();

        var options = $("#establecimiento option:selected").map(function(){
            
            a = this.value;
            b = this.text;

            if(eeSelected){

                var result = $.grep(eeSelected, function(e){ return e == a; });
                if(result != a){values = '<option value="'+a+'" selected> '+b+' </option>';}

            } else { values = '<option value="'+a+'" selected> '+b+' </option>'; }

            return values

        }).get().join(",");

        $("#establecimiento_id").append(options);

    });
    
});
</script>