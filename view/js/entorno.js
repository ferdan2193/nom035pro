$(document).ready(function(e){


    $("#entornoopt1").click(function(e){
        e.preventDefault();
        var idaccess = $(this).attr("value");
      //  alert(idaccess);
        $("div[id=entorno-col1]").prop("hidden", false);
        $("div[id=entorno-col2]").prop("hidden", true);
        $("div[id=entorno-col3]").prop("hidden", true);
        $("div[id=entorno-col4]").prop("hidden", true);
       $("div[id=entorno-col5]").prop("hidden", true);

   })

   $("#entornoopt2").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=entorno-col1]").prop("hidden", true);
    $("div[id=entorno-col2]").prop("hidden", false);
    $("div[id=entorno-col3]").prop("hidden", true);
    $("div[id=entorno-col4]").prop("hidden", true);
    $("div[id=entorno-col5]").prop("hidden", true);


})

$("#entornoopt3").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=entorno-col1]").prop("hidden", true);
    $("div[id=entorno-col2]").prop("hidden", true);
    $("div[id=entorno-col3]").prop("hidden", false);
    $("div[id=entorno-col4]").prop("hidden", true);
    $("div[id=entorno-col5]").prop("hidden", true);


})

$("#entornoopt4").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=entorno-col1]").prop("hidden", true);
    $("div[id=entorno-col2]").prop("hidden", true);
    $("div[id=entorno-col3]").prop("hidden", true);
    $("div[id=entorno-col4]").prop("hidden", false);
    $("div[id=entorno-col5]").prop("hidden", true);


})

("#entornoopt5").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=entorno-col1]").prop("hidden", true);
    $("div[id=entorno-col2]").prop("hidden", true);
    $("div[id=entorno-col3]").prop("hidden", true);
    $("div[id=entorno-col4]").prop("hidden", true);
    $("div[id=entorno-col5]").prop("hidden", false);


})

        
   
               
});