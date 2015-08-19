    getGi = function() {

      var ee_id = $("#establecimiento_id").val();

      if(ee_id !=""){
        //ajax
        $.get('/ajax-gi?ee_id=' + ee_id,function (data) { 
            // succes data
            if(data != ""){
            $("#grupoInvestigacion_id").empty();
            //ajax
            $.each(data,function(i, gi_Obj){
                $("#grupoInvestigacion_id").append('"<option value ="' + gi_Obj.id +'">' + gi_Obj.nombre + '</option>');
            });
            }else{
              $("#grupoInvestigacion_id").html('"<option value ="">El Establecimiento no posee Grupos de Investigación</option>');
            }
        },'json');

      } else {
        $("#grupoInvestigacion_id").html('"<option value =""> Seleccione un establecimiento educativo</option>');
      }
    };

    showPanelGi = function(){
      
      var tipo = $("#tipo").val();

      switch(tipo) {
        case "estudiante":
        case "coinvestigador":
        case "acompanante":

          $("#panelGi").show();   

          if(tipo != "estudiante"){

            $(".grado, .rol").hide();
            $("#rol").val() = tipo;

          } else { $(".grado, .rol").show(); }

          break;

        default:
          $("#panelGi").hide();
      } 
    };

    getMun = function(){

        var ruta = $("#ruta").val();

        $.get('/ajax-mun?ruta=' + ruta,function (data) { 
            // succes data

            //$("#municipio").empty();
            $("#municipio").html('"<option value ="">...</option>');
            //ajax
            $.each(data,function(i, mun_Obj){
                $("#municipio").append('"<option value ="' + mun_Obj.id +'">' + mun_Obj.nombre + '</option>');
            });
        },'json');

    };

    getEe = function(){

        var mun_id = $("#municipio").val();

        $.get('/ajax-ee?mun_id=' + mun_id,function (data) { 
            // succes data

            $("#establecimiento").empty();
            //ajax
            $.each(data,function(i, ee_Obj){
                $("#establecimiento").append('"<option value ="' + ee_Obj.id +'">' + ee_Obj.nombre + '</option>');
            });
        },'json');

    };

     AddEE = function(){

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

    };

    