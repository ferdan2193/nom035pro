$(document).ready(function(e){
    var url = "http://localhost/nom035pro/";


    $("#politicasopt1").click(function(e){
        e.preventDefault();
        var idaccess = $(this).attr("value");
      //  alert(idaccess);
        $("div[id=politicas-col1]").prop("hidden", false);
        $("div[id=politicas-col2]").prop("hidden", true);
        $("div[id=politicas-col3]").prop("hidden", true);
        $("div[id=politicas-col4]").prop("hidden", true);
        $("div[id=btndescarga]").prop("hidden", false);


   })

   $("#politicasopt2").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=politicas-col1]").prop("hidden", true);
    $("div[id=politicas-col2]").prop("hidden", false);
    $("div[id=politicas-col3]").prop("hidden", true);
    $("div[id=politicas-col4]").prop("hidden", true);
    $("div[id=btndescarga]").prop("hidden", false);


})

$("#politicasopt3").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=politicas-col1]").prop("hidden", true);
    $("div[id=politicas-col2]").prop("hidden", true);
    $("div[id=politicas-col3]").prop("hidden", false);
    $("div[id=politicas-col4]").prop("hidden", true);
    $("div[id=btndescarga]").prop("hidden", false);


})

$("#politicasopt4").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=politicas-col1]").prop("hidden", true);
    $("div[id=politicas-col2]").prop("hidden", true);
    $("div[id=politicas-col3]").prop("hidden", true);
    $("div[id=politicas-col4]").prop("hidden", false);
    $("div[id=btndescarga]").prop("hidden", false);


})

$("#downloadPoliticasTemplate").click(function (e) {
    e.preventDefault();
    window.location = url + "files/system/politicas_prevencion_riesgos_psicosociales_2020.pdf";
})
        
   
               
});