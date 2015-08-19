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