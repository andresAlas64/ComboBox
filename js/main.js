$(document).ready(function(){
    $("#provincia").change(function () {
        
        $('#distrito').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
        
        $("#provincia option:selected").each(function () {
            id_canton = $(this).val();
            //alert(id_canton);
            $.post("services/getCanton.php", { id_canton: id_canton }, function(data){
                $("#canton").html(data);
            });            
        });
    })
});

$(document).ready(function(){
    $("#canton").change(function () {
        $("#canton option:selected").each(function () {
            id_distrito = $(this).val();
            $.post("services/getDistrito.php", { id_distrito: id_distrito }, function(data){
                $("#distrito").html(data);
            });            
        });
    })
});