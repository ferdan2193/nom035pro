$(document).ready(function(e){


    $("#option1").click(function(e){
        e.preventDefault();
        var idaccess = $(this).attr("value");
      //  alert(idaccess);
        $("div[id=cont-col1]").prop("hidden", false);
        $("div[id=cont-col2]").prop("hidden", true);
        $("div[id=cont-col3]").prop("hidden", true);
        $("div[id=cont-col4]").prop("hidden", true);


   })

   $("#option2").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=cont-col1]").prop("hidden", true);
    $("div[id=cont-col2]").prop("hidden", false);
    $("div[id=cont-col3]").prop("hidden", true);
    $("div[id=cont-col4]").prop("hidden", true);


})

$("#option3").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=cont-col1]").prop("hidden", true);
    $("div[id=cont-col2]").prop("hidden", true);
    $("div[id=cont-col3]").prop("hidden", false);
    $("div[id=cont-col4]").prop("hidden", true);


})

$("#option4").click(function(e){
    e.preventDefault();
    var idaccess = $(this).attr("value");
   // alert(idaccess);
    $("div[id=cont-col1]").prop("hidden", true);
    $("div[id=cont-col2]").prop("hidden", true);
    $("div[id=cont-col3]").prop("hidden", true);
    $("div[id=cont-col4]").prop("hidden", false);


})

        
   
               
});